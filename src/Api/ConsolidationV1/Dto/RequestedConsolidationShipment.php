<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedConsolidationShipment extends Dto
{
    protected static array $complexArrayTypes = [
        'requestedPackageLineItems' => RequestedPackageLineItem::class,
        'recipients' => RecipientParty::class,
    ];

    /**
     * @param  string  $shipDatestamp  This is shipment date. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone.<br>Format: YYYY-MM-DD. <br>
     * @param  string  $pickupType  Indicate the pickup type method by which the shipment to be tendered to FedEx. <br> Example: <ul><li>CONTACT_FEDEX_TO_SCHEDULE</li><li>DROPOFF_AT_FEDEX_LOCATION</li><li>USE_SCHEDULED_PICKUP</li></ul>
     * @param  string  $packagingType  The type of packaging for the shipment.
     * @param  ShipperParty  $shipper  The descriptive information for the customer shipping the package along with the physical location from where the shipment originates.
     * @param  Payment  $shippingChargesPayment  Details about who and how the shipment will be paid for. 'payor' is optional when 'paymentType' provided is SENDER.
     * @param  LabelSpecification  $labelSpecification  These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.<br> Mandatory as it is needed during confirming consolidation. If it is not passed while creating consolidation it will fail during confirming consolidation.
     * @param  int  $packageCount  The number of packages.
     * @param  RequestedPackageLineItem[]  $requestedPackageLineItems
     * @param  ?RequestedConsolidationShipmentSpecialServicesRequested  $specialServicesRequested  These special services are available at the shipment level for some or all service types.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.<br>RETURN_SHIPMENT is required for creating return shipments.
     * @param  ?Weight  $totalWeight  Indicate the shipment total weight in pounds.<br>Example: 10.6<br>Note: <ul><li>This only applies to International shipments and should be used on the first package of a multiple piece shipment.</li><li>This value contains 1 explicit decimal position.</li><li>For one Label at a time shipments, the unit of totalWeight is considered same as the unit of weight provided in requestedPackageLineItem field.</li></ul>
     * @param  RecipientParty[]|null  $recipients
     * @param  ?CustomsClearanceDetail  $customsClearanceDetail  Required for International and intra-country Shipments. Information about this package that only applies to an international (export) shipment or return.
     */
    public function __construct(
        public string $shipDatestamp,
        public string $pickupType,
        public string $serviceType,
        public string $packagingType,
        public ShipperParty $shipper,
        public Payment $shippingChargesPayment,
        public LabelSpecification $labelSpecification,
        public int $packageCount,
        public array $requestedPackageLineItems,
        public ?RequestedConsolidationShipmentSpecialServicesRequested $specialServicesRequested = null,
        public ?string $dropOffType = null,
        public ?Weight $totalWeight = null,
        public ?array $recipients = null,
        public ?RequestedConsolidationShipmentProcessingOption $processingOption = null,
        public ?CustomsClearanceDetail $customsClearanceDetail = null,
        public ?string $rateRequestTypes = null,
    ) {}
}