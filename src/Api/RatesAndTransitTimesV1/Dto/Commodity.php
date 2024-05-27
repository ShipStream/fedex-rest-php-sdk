<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Commodity extends Dto
{
    /**
     * @param  ?string  $description  Indicate the description of the dutiable packages.<br> Maximum Length is 450. <br> Example: DOCUMENTS <br><a onclick='loadDocReference("vaguecommoditydescriptions")'>Click here to see Vague commodity descriptions</a>
     * @param  ?Weight  $weight  These are the weight details.
     * @param  ?int  $quantity  Specify the total number of units (using quantityUnits as the unit of measure) of this commodity present in the shipment. This element is used to estimate duties and taxes. <br>Example: 1
     * @param  ?Money  $customsValue  Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     * @param  ?Money  $unitPrice  Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     * @param  ?int  $numberOfPieces  Specifies the number of pieces for this commodity.<br>Example: 10
     * @param  ?string  $countryOfManufacture  This is a manufacturing country. Maximum field Length is 4<br> Example: IN
     * @param  ?string  $quantityUnits  Indicate quantiy unit used. Used to estimate duties and taxes <br> Example: PCS<br><a onclick='loadDocReference("harmonizedsystemcodeunitofmeasure-table1")'>click here to see Commodity Unit Measures</a>
     * @param  ?string  $name  Indicate the Commodity name<br>Example: DOCUMENTS
     * @param  ?string  $harmonizedCode  This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: A six digit code for Almonds fresh or dried is 080211. The HTS code for pistachios in shell is 080251. The HTS code for fish is HS203.<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You can find the commodities and its respective codes by logging into FedEx and selecting harmonized code option. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination. <br>For additional information about harmonized code, refer to <a href='https://www.usitc.gov/documents/hts_external_guide.pdf' target='_blank'>harmonized code</a>.
     * @param  ?string  $partNumber  Specify the part number if any. Example: P1
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?Weight $weight = null,
        public readonly ?int $quantity = null,
        public readonly ?Money $customsValue = null,
        public readonly ?Money $unitPrice = null,
        public readonly ?int $numberOfPieces = null,
        public readonly ?string $countryOfManufacture = null,
        public readonly ?string $quantityUnits = null,
        public readonly ?string $name = null,
        public readonly ?string $harmonizedCode = null,
        public readonly ?string $partNumber = null,
    ) {
    }
}
