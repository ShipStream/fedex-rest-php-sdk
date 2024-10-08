<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentConsolidationDetail extends Dto
{
    protected static array $complexArrayTypes = ['associatedTrackingIds' => AssociatedTrackingDetails::class];

    /**
     * @param  ?string  $type  Provides the type of shipment consolidation.<br> Example: INTERNATIONAL_PRIORITY_DISTRIBUTION
     * @param  ?string  $role  Provides the role of consolidation shipment. <br> Example: CRN_SHIPMENT
     * @param  AssociatedTrackingDetails[]|null  $associatedTrackingIds  Provides the associated tracking id
     */
    public function __construct(
        public ?string $type = null,
        public ?string $role = null,
        public ?array $associatedTrackingIds = null,
    ) {}
}
