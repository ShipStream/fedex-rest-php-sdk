<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Commodity extends Dto
{
    protected static array $attributeMap = ['cImarksAndNumbers' => 'cIMarksAndNumbers'];

    protected static array $complexArrayTypes = ['additionalMeasures' => [AdditionalMeasures::class]];

    /**
     * @param  string  $description  This is the commodity description. Maximum allowed 450 characters.<br><a onclick='loadDocReference("vaguecommoditydescriptions")'>click here to see Vague commodity descriptions</a>
     * @param  ?Money  $unitPrice  This customs value is applicable for all items(or units) under the specified commodity
     * @param  AdditionalMeasures[]|null  $additionalMeasures  This object contains additional quantitative information other than weight and quantity to calculate duties and taxes.
     * @param  ?int  $numberOfPieces  Indicate the number of pieces associated with the commodity. The value can neither be negative nor exceed 9,999.<br>Example: 12
     * @param  ?int  $quantity  This is the units quantity (using quantityUnits as the unit of measure) per commodity. This is used to estimate duties and taxes.<br> Example: 125
     * @param  ?string  $quantityUnits  This is the unit of measure for the units quantity. This is used to estimate duties and taxes.<br>Example: EA<br><a onclick='loadDocReference("harmonizedsystemcodeunitofmeasure-table1")'>click here to see Commodity Unit Measures</a>
     * @param  ?CustomsMoney  $customsValue  This customs value is applicable for all items(or units) under the specified commodity.
     * @param  ?string  $countryOfManufacture  This is commodity country of manufacture. This is required for International shipments. Maximum allowed length is 4.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     * @param  ?string  $cImarksAndNumbers  This is an identifying mark or number used on the packaging of a shipment to help customers identify a particular shipment<br>Example: 87123
     * @param  ?string  $harmonizedCode  This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: 0613<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination.
     * @param  ?string  $name  This is Commodity name.<br>Example: Non-Threaded Rivets
     * @param  ?Weight  $weight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  ?string  $exportLicenseNumber  This is the export license number for the shipment.<br>Example: 26456
     * @param  ?DateTime  $exportLicenseExpirationDate  Specify the export license expiration date for the shipment.<br>Format YYYY-MM-DD<br>Example : 2009-04-12
     * @param  ?string  $partNumber  This is a part number.<br>Example: 167
     * @param  ?string  $purpose  This is the purpose of this shipment. This is used for calculation of duties and taxes.
     * @param  ?UsmcaDetail  $usmcaDetail  Indicates the USMCA detail
     */
    public function __construct(
        public readonly string $description,
        public readonly ?Money $unitPrice = null,
        public readonly ?array $additionalMeasures = null,
        public readonly ?int $numberOfPieces = null,
        public readonly ?int $quantity = null,
        public readonly ?string $quantityUnits = null,
        public readonly ?CustomsMoney $customsValue = null,
        public readonly ?string $countryOfManufacture = null,
        public readonly ?string $cImarksAndNumbers = null,
        public readonly ?string $harmonizedCode = null,
        public readonly ?string $name = null,
        public readonly ?Weight $weight = null,
        public readonly ?string $exportLicenseNumber = null,
        public readonly ?\DateTime $exportLicenseExpirationDate = null,
        public readonly ?string $partNumber = null,
        public readonly ?string $purpose = null,
        public readonly ?UsmcaDetail $usmcaDetail = null,
    ) {
    }
}
