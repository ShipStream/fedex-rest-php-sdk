<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class UploadDocumentReferenceDetail extends Dto
{
    /**
     * @param  ?string  $documentType  These are the type of document specified in the PendingShipment request.
     * @param  ?string  $customerReference  Customer Reference
     * @param  ?string  $description  Indicate description of the shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     * @param  ?string  $documentId  Specify the document ID for the uploaded document.
     */
    public function __construct(
        public readonly ?string $documentType = null,
        public readonly ?string $customerReference = null,
        public readonly ?string $description = null,
        public readonly ?string $documentId = null,
    ) {
    }
}
