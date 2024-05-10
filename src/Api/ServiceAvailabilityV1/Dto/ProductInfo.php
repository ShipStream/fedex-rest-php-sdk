<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ProductInfo extends Dto
{
    /**
     * @param  ?bool  $customsValueAndWeightSpecifiedAsUnit  The total value declared to the Bureau of Customs and Border Protection for all packages in the shipment along with the weight details.
     * @param  ?int  $quantity  Quantity of the product in the package/shipment.
     * @param  ?float  $customsValue  Customs value of the product in the package/shipment.
     * @param  ?string  $weightUnitOfMeasureCode  Weight measurement unit code of the product in the package/shipment.
     * @param  ?string  $description  Description of the product in the package/shipment.
     * @param  ?string  $weight  Describes the weight of the package/packageType.
     * @param  ?bool  $sedRequired  Indicates if shippers export declaration is required or not.
     * @param  ?string  $productType  Indicates the package/shipment contains documents or non-document commodities.
     * @param  ?string  $unitOfMeasureCode  Specifies if shippers export declaration is required.<br>Valid values: True, False.
     * @param  ?string  $countryOfManufactureCode  Specify the country code of the product manufacturer.
     */
    public function __construct(
        public readonly ?bool $customsValueAndWeightSpecifiedAsUnit = null,
        public readonly ?int $quantity = null,
        public readonly ?float $customsValue = null,
        public readonly ?string $weightUnitOfMeasureCode = null,
        public readonly ?string $description = null,
        public readonly ?string $weight = null,
        public readonly ?bool $sedRequired = null,
        public readonly ?string $productType = null,
        public readonly ?string $unitOfMeasureCode = null,
        public readonly ?string $countryOfManufactureCode = null,
    ) {
    }
}
