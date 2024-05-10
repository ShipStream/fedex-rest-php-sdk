<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class EtdDetail extends Dto
{
    protected static array $complexArrayTypes = ['attachedDocuments' => [UploadDocumentReferenceDetail::class]];

    /**
     * @param  ?string[]  $attributes  Use this attribute to specify if the Trade documents will be uploaded post the shipment.
     * @param  UploadDocumentReferenceDetail[]|null  $attachedDocuments  Use this object to specify the details regarding already uploded document(s). This object is required if the documents are uploaded Pre-Shipment uploaded documents. It is recommended to provide values for all elements under this object.
     * @param  ?string[]  $requestedDocumentTypes  Indicate the types of shipping documents to be produced by FedEx and copied back in the shipment result data.<br>Note: For more information document types, refer business overview topic - <a href='#shippingandcustoms'><b>Shipping and Customs Documents.</b></a>
     */
    public function __construct(
        public readonly ?array $attributes = null,
        public readonly ?array $attachedDocuments = null,
        public readonly ?array $requestedDocumentTypes = null,
    ) {
    }
}
