<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class AssociatedFreightLineItemDetail extends Dto
{
    /**
     * @param  string  $id  A freight line item identifier referring to a freight shipment line item that describes goods contained within this handling unit.
     */
    public function __construct(
        public string $id,
    ) {}
}