<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ConsolidationShipmentsConsolidationRequestedShipmentsCompletedShipmentDetailSpecialServiceDescriptionNames extends Dto
{
    /**
     * @param  ?string  $type
     * @param  ?string  $encoding
     * @param  ?string  $value
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $encoding = null,
        public readonly ?string $value = null,
    ) {
    }
}
