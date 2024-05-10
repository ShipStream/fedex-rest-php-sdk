<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ReferenceInformation extends Dto
{
    /**
     * @param  string  $value  Conditionally required. <br>Specifies the alternate reference value. <br> Example: 56754674567546754
     * @param  string  $shipDateBegin  ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-03-29
     * @param  string  $shipDateEndDate  ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-04-01
     * @param  ?string  $carrierCode  Specifies which carrier should be included.<br> Example: FDXE
     * @param  ?string  $type  Specify the type of alternate reference used. This is Conditionally required.<br> Valid Values :<ul><li>BILL_OF_LADING</li><li>COD_RETURN_TRACKING_NUMBER</li><li>CUSTOMER_AUTHORIZATION_NUMBER</li><li>CUSTOMER_REFERENCE</li><li>DEPARTMENT</li><li>DOCUMENT_AIRWAY_BILL</li><li>EXPRESS_ALTERNATE_REFERENCE</li><li>FEDEX_OFFICE_JOB_ORDER_NUMBER</li><li>FREE_FORM_REFERENCE</li><li>GROUND_INTERNATIONAL</li><li>GROUND_SHIPMENT_ID</li><li>INTERNATIONAL_DISTRIBUTION</li><li>INVOICE</li><li>JOB_GLOBAL_TRACKING_NUMBER</li><li>ORDER_GLOBAL_TRACKING_NUMBER</li><li>ORDER_TO_PAY_NUMBER</li><li>PART_NUMBER</li><li>PARTNER_CARRIER_NUMBER</li><li>PURCHASE_ORDER</li><li>REROUTE_TRACKING_NUMBER</li><li>RETURN_MATERIALS_AUTHORIZATION</li><li>RETURNED_TO_SHIPPER_TRACKING_NUMBER</li><li>SHIPPER_REFERENCE</li><li>TRANSBORDER_DISTRIBUTION</li><li>TRANSPORTATION_CONTROL_NUMBER</li><li>VIRTUAL_CONSOLIDATION</li></ul>
     * @param  ?string  $accountNumber  Conditionally required. <br>Specifies the shipper's account number. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference.<br> Example: 697561862
     * @param  ?string  $destinationCountryCode  Conditionally required. <br>Specifies the recipient's country code. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference.<br> Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string  $destinationPostalCode  Conditionally required. <br>Indicate recipient postal code. Required for postal-aware countries. <br> Note: Either account number or destination postal code and country code are mandatory to track by reference. <br> Example: 75063<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     */
    public function __construct(
        public readonly string $value,
        public readonly string $shipDateBegin,
        public readonly string $shipDateEndDate,
        public readonly ?string $carrierCode = null,
        public readonly ?string $type = null,
        public readonly ?string $accountNumber = null,
        public readonly ?string $destinationCountryCode = null,
        public readonly ?string $destinationPostalCode = null,
    ) {
    }
}
