<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaSpod extends Dto
{
    protected static array $complexArrayTypes = ['trackDocumentSpecification' => TrackDocumentSpecification::class];

    /**
     * @param  TrackDocumentDetail  $trackDocumentDetail  Specifies the tracking document details.
     * @param  TrackDocumentSpecification[]  $trackDocumentSpecification  This is the placeholder for document specification details required to identify the shipment being tracked. This includes tracking information such as tracking qualifier, carrier code, and tracking number.<br>At least one trackDocumentSpecification is required. Maximum limit is 30.
     */
    public function __construct(
        public TrackDocumentDetail $trackDocumentDetail,
        public array $trackDocumentSpecification,
    ) {}
}
