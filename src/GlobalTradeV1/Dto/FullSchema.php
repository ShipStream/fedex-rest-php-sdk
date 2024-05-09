<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchema extends Dto
{
    protected static array $attributeMap = ['includeUrlReferences' => 'includeURLReferences'];

    /**
     * @param  mixed[]  $originAddress  Provide the shipment origin address details.
     * @param  mixed[]  $destinationAddress  Provide the shipment destination address details.
     * @param  string  $carrierCode  Specify the four letter code of a FedEx operating company that meets your requirements.<br><br>Valid values are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><br>Example: FDXE
     * @param  ?string  $serviceType  Specify the type of service that is used to ship the package.<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     * @param  ?mixed[]  $totalCommodityValue  Specify the total commodity value. Either customsClearenceDetail or totalCommodityValue is required.
     * @param  ?string[]  $serviceOptionType  Specify attributes to filter location types. If more than one value is specified, only those locations that have all the specified attributes will be returned.
     * @param  ?mixed[]  $customsClearanceDetail  Specify the Customs clearance details.Either customsClearenceDetail or totalCommodityValue is required.
     * @param  ?string  $shipDate  Specify shipment date. <br><br><i>Note : Default value is current date in case the date is not provided or a past date is provided.</i><br>Format [YYYY-MM-DD].<br>Example: 2021-08-05'
     * @param  ?mixed[]  $totalWeight  Provide the total weight for the shipment.
     * @param  ?bool  $includeUrlReferences  Specify if the url references to be included in the output. These are regulatory reference data urls specific to document, agency.
     * @param  ?string  $consolidationType  Specify the type of consolidation that contains this shipment.<br><br>Valid values are:<ul><li>INTERNATIONAL_DISTRIBUTION_FREIGHT</li><li>INTERNATIONAL_ECONOMY_DISTRIBUTION</li><li>INTERNATIONAL_GROUND_DISTRIBUTION</li><li>INTERNATIONAL_PRIORITY_DISTRIBUTION</li><li>TRANSBORDER_DISTRIBUTION</ul>
     * @param  ?string  $consolidationRole  Specify the role this shipment plays within the consolidation.<br><br>Valid values are:<ul><li>CONSOLIDATION_DOCUMENTS_SHIPMENT &ndash; Shipment contains clearance documents for the corresponding consolidation.</li><li>CRN_SHIPMENT &ndash; Shipment is a Child Reference Number(individual shipment within consolidation).</li><li>MASTER_AIRWAYBILL_SHIPMENT &ndash; Shipment represents entire consolidation, moving as a unit.</li></ul>
     */
    public function __construct(
        public readonly array $originAddress,
        public readonly array $destinationAddress,
        public readonly string $carrierCode,
        public readonly ?string $serviceType = null,
        public readonly ?array $totalCommodityValue = null,
        public readonly ?array $serviceOptionType = null,
        public readonly ?array $customsClearanceDetail = null,
        public readonly ?string $shipDate = null,
        public readonly ?array $totalWeight = null,
        public readonly ?bool $includeUrlReferences = null,
        public readonly ?string $consolidationType = null,
        public readonly ?string $consolidationRole = null,
    ) {
    }
}
