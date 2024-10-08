<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class Commodity extends Dto
{
    /**
     * @param  string  $name  Specify the commodity name
     * @param  int  $numberOfPieces  Indicates the number of pieces associated with the commodity. Number of pieces cannot be a negative value or exceed 9,999.
     * @param  string  $description  This is the commodity description. Maximum allowed 450 characters.
     * @param  ?string  $countryOfManufacture  This is commodity country of manufacture. This is required for International shipments. Maximum allowed length is 4.
     * @param  ?Weight  $weight  Indicate the shipment total weight in pounds.<br>Example: 10.6<br>Note: <ul><li>This only applies to International shipments and should be used on the first package of a multiple piece shipment.</li><li>This value contains 1 explicit decimal position.</li><li>For one Label at a time shipments, the unit of totalWeight is considered same as the unit of weight provided in requestedPackageLineItem field.</li></ul>
     * @param  ?int  $quantity  This is the units quantity (using quantityUnits as the unit of measure) per commodity. This is used to estimate duties and taxes.
     * @param  ?string  $quantityUnits  This is the unit of measure for the units quantity. This is used to estimate duties and taxes.
     * @param  ?Money2  $unitPrice  This is commodity value used for Customs declaration.
     * @param  ?Money2  $customsValue  This is commodity value used for Customs declaration.
     * @param  ?string  $commodityId  Value used to identify a commodity description; must be unique within the containing shipment.
     */
    public function __construct(
        public string $name,
        public int $numberOfPieces,
        public string $description,
        public ?string $countryOfManufacture = null,
        public ?Weight $weight = null,
        public ?int $quantity = null,
        public ?string $quantityUnits = null,
        public ?Money2 $unitPrice = null,
        public ?Money2 $customsValue = null,
        public ?string $commodityId = null,
    ) {}
}
