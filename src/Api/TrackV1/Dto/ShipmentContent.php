<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentContent extends Dto
{
    /**
     * @param  ?string  $itemNumber  Field holds the item number for the contents of shipment. <br> Example: RZ5678
     * @param  ?string  $receivedQuantity  Field which holds information about the quantity received. <br> Example: 13
     * @param  ?string  $description  Field which holds informative description about shipment content. <br> Example:  pulyurethane rope
     * @param  ?string  $partNumber  Holds the part number of the content in shipment. <br> Example: RK1345
     */
    public function __construct(
        public ?string $itemNumber = null,
        public ?string $receivedQuantity = null,
        public ?string $description = null,
        public ?string $partNumber = null,
    ) {}
}
