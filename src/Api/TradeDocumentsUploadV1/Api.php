<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\FullSchemaDocumentUploadInputVo;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\FullSchemaImageUploadServiceInputVo;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Requests\ImageUploadServiceInfo;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Requests\UploadEtdFiles;
use ShipStream\FedEx\BaseResource;

class TradeDocumentsUploadV1 extends BaseResource
{
    /**
     * @param  FullSchemaDocumentUploadInputVo  $fullSchemaDocumentUploadInputVo  The request elements to upload documents.
     */
    public function uploadEtdFiles(FullSchemaDocumentUploadInputVo $fullSchemaDocumentUploadInputVo): Response
    {
        return $this->connector->send(new UploadEtdFiles($fullSchemaDocumentUploadInputVo));
    }

    /**
     * @param  FullSchemaImageUploadServiceInputVo  $fullSchemaImageUploadServiceInputVo  The request elements to upload image files.
     */
    public function imageUploadServiceInfo(
        FullSchemaImageUploadServiceInputVo $fullSchemaImageUploadServiceInputVo,
    ): Response {
        return $this->connector->send(new ImageUploadServiceInfo($fullSchemaImageUploadServiceInputVo));
    }
}
