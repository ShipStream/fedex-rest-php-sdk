<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryShipmentDetail extends Dto
{
    /**
     * @param  ?RegulatoryStatement  $regulatoryStatements  Specifies the list of regulatory statements.
     * @param  ?string[]  $requiredCommodityUnitsOfMeasure  This is the statistical unit of measure required by the government.
     * @param  ?string  $level  This a Delay Level Type. The attribute of the shipment that caused delay.
     * @param  ?int  $commodityIndex  This is a non negative integer. This is a 1-based index identifying the comodity in the request that resulted in this Commodity or Document type prohibition.
     * @param  ?RegulatoryDocument  $regulatoryDocuments  Specifies the Regulatory Documents.
     * @param  ?RegulatoryCountryAdvisory  $regulatoryCountryAdvisories  Specifies the types and parameters of Country's advisory regulations.
     */
    public function __construct(
        public readonly ?RegulatoryStatement $regulatoryStatements = null,
        public readonly ?array $requiredCommodityUnitsOfMeasure = null,
        public readonly ?string $level = null,
        public readonly ?int $commodityIndex = null,
        public readonly ?RegulatoryDocument $regulatoryDocuments = null,
        public readonly ?RegulatoryCountryAdvisory $regulatoryCountryAdvisories = null,
    ) {
    }
}
