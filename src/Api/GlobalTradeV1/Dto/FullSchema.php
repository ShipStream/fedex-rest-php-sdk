<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchema extends Dto
{
    protected static array $attributeMap = ['includeUrlReferences' => 'includeURLReferences'];

    /**
     * @param  Address  $originAddress  Address Model
     * @param  Address  $destinationAddress  Address Model
     * @param  string  $carrierCode  Specify the four letter code of a FedEx operating company that meets your requirements.<br><br>Valid values are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><br>Example: FDXE
     * @param  ?string  $serviceType  Specify the type of service that is used to ship the package.<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     * @param  ?Money  $totalCommodityValue  Specify Insurance charges if applicable.<br><i>Note: FedEx does not provide insurance of any kind</i>.
     * @param  ?string[]  $serviceOptionType  Specify attributes to filter location types. If more than one value is specified, only those locations that have all the specified attributes will be returned.
     * @param  ?CustomsClearanceDetailVo  $customsClearanceDetail  These are customs clearance details. <br>Required for International and intra-country Shipments.
     * @param  ?string  $shipDate  Specify shipment date. <br><br><i>Note : Default value is current date in case the date is not provided or a past date is provided.</i><br>Format [YYYY-MM-DD].<br>Example: 2021-08-05'
     * @param  ?Weight  $totalWeight  Specify the Dry Ice weight details. <p><i>Note:<ul><li>Dry Ice is a Package level service for Domestic shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     * @param  ?bool  $includeUrlReferences  Specify if the url references to be included in the output. These are regulatory reference data urls specific to document, agency.
     * @param  ?string  $consolidationType  Specify the type of consolidation that contains this shipment.<br><br>Valid values are:<ul><li>INTERNATIONAL_DISTRIBUTION_FREIGHT</li><li>INTERNATIONAL_ECONOMY_DISTRIBUTION</li><li>INTERNATIONAL_GROUND_DISTRIBUTION</li><li>INTERNATIONAL_PRIORITY_DISTRIBUTION</li><li>TRANSBORDER_DISTRIBUTION</ul>
     * @param  ?string  $consolidationRole  Specify the role this shipment plays within the consolidation.<br><br>Valid values are:<ul><li>CONSOLIDATION_DOCUMENTS_SHIPMENT &ndash; Shipment contains clearance documents for the corresponding consolidation.</li><li>CRN_SHIPMENT &ndash; Shipment is a Child Reference Number(individual shipment within consolidation).</li><li>MASTER_AIRWAYBILL_SHIPMENT &ndash; Shipment represents entire consolidation, moving as a unit.</li></ul>
     */
    public function __construct(
        public Address $originAddress,
        public Address $destinationAddress,
        public string $carrierCode,
        public ?string $serviceType = null,
        public ?Money $totalCommodityValue = null,
        public ?array $serviceOptionType = null,
        public ?CustomsClearanceDetailVo $customsClearanceDetail = null,
        public ?string $shipDate = null,
        public ?Weight $totalWeight = null,
        public ?bool $includeUrlReferences = null,
        public ?string $consolidationType = null,
        public ?string $consolidationRole = null,
    ) {}
}
