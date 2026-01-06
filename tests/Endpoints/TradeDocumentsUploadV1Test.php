<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\Document;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\DocumentContainer;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\DocumentMeta;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\DocumentRules;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\EtdUploadRequest;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\FullSchemaDocumentUploadInputVo;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\FullSchemaImageUploadServiceInputVo;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\FullSchemaMultiDocumentRequest;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\MetaObject;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\MultiEtdUploadRequest;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\MultiMetaDataRequest;
use ShipStream\FedEx\Enums\Endpoint;
use ShipStream\FedEx\FedEx;

class TradeDocumentsUploadV1Test extends TestCase
{
    private ?TradeDocumentsUploadV1\Api $api;

    protected function setUp(): void
    {
        $this->api = (new FedEx(
            clientId: $_ENV['CLIENT_ID'],
            clientSecret: $_ENV['CLIENT_SECRET'],
            endpoint: Endpoint::SANDBOX_DOCUMENTS_UPLOAD,
        ))->tradeDocumentsUploadV1();
    }

    public function testUploadEtdFiles(): void
    {
        $fileContent = 'Test document content for FedEx upload';

        $response = $this->api->uploadEtdFiles(new FullSchemaDocumentUploadInputVo(
            attachment: $fileContent,
            document: new EtdUploadRequest(
                workflowName: 'ETDPreshipment',
                name: 'test-document.txt',
                contentType: 'text/plain',
                meta: new MetaObject(
                    shipDocumentType: 'COMMERCIAL_INVOICE',
                    originCountryCode: 'US',
                    destinationCountryCode: 'CA',
                ),
            ),
        ));

        $this->assertTrue($response->successful(), 'Response: '.$response->body());

        $dto = $response->dto();
        $this->assertNotNull($dto->output?->meta?->docId, 'Expected docId in response');
    }

    public function testImageUploadServiceInfo(): void
    {
        // Create a minimal valid PNG (1x1 transparent pixel)
        $pngContent = base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==');

        $response = $this->api->imageUploadServiceInfo(new FullSchemaImageUploadServiceInputVo(
            document: new DocumentContainer(
                document: new Document(
                    referenceId: 'TEST123',
                    name: 'test-signature.png',
                    contentType: 'image/png',
                    meta: new DocumentMeta(
                        imageType: 'SIGNATURE',
                        imageIndex: 'IMAGE_1',
                    ),
                ),
                rules: new DocumentRules(
                    workflowName: 'LetterheadSignature',
                ),
            ),
            attachment: $pngContent,
        ));

        $this->assertTrue($response->successful(), 'Response: '.$response->body());

        $dto = $response->dto();
        $this->assertSame('SUCCESS', $dto->output?->status);
    }

    public function testUploadMultiEtdFiles(): void
    {
        $file1Content = 'First test document content';
        $file2Content = 'Second test document content';

        $response = $this->api->uploadMultiEtDfiles(new FullSchemaMultiDocumentRequest(
            documentInformation: new MultiEtdUploadRequest(
                workflowName: 'ETDPreshipment',
                carrierCode: 'FDXE',
                originCountryCode: 'US',
                destinationCountryCode: 'CA',
                metaData: [
                    new MultiMetaDataRequest(
                        fileName: 'invoice.txt',
                        contentType: 'text/plain',
                        shipDocumentType: 'COMMERCIAL_INVOICE',
                    ),
                    new MultiMetaDataRequest(
                        fileName: 'certificate.txt',
                        contentType: 'text/plain',
                        shipDocumentType: 'CERTIFICATE_OF_ORIGIN',
                    ),
                ],
            ),
            fileAttachments: [$file1Content, $file2Content],
        ));

        $this->assertTrue($response->successful(), 'Response: '.$response->body());

        $dto = $response->dto();
        $this->assertCount(2, $dto->output?->documentResponses ?? []);
        foreach ($dto->output->documentResponses as $i => $documentResponse) {
            $this->assertNotNull($documentResponse->metaData?->docId, "Expected docId for document $i");
        }
    }
}
