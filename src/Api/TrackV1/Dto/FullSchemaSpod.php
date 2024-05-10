<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaSpod extends Dto
{
    protected static array $complexArrayTypes = ['trackDocumentSpecification' => [TrackDocumentSpecification::class]];

    /**
     * @param  mixed[]  $trackDocumentDetail  This object specifies the tracking document details such as types of documents, for example, SIGNATURE_PROOF_OF_DELIVERY and also the format of tracking document. Supported values are PDF and PNG. Default is PDF.
     * @param  TrackDocumentSpecification[]  $trackDocumentSpecification  This is the placeholder for document specification details required to identify the shipment being tracked. This includes tracking information such as tracking qualifier, carrier code, and tracking number.<br>At least one trackDocumentSpecification is required. Maximum limit is 30.
     */
    public function __construct(
        public readonly array $trackDocumentDetail,
        public readonly array $trackDocumentSpecification,
    ) {
    }
}
