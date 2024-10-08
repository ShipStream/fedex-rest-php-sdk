<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedConsolidation extends Dto
{
    protected static array $complexArrayTypes = [
        'consolidationDataSources' => ConsolidationDataSources1Inner::class,
        'customerReferences' => CustomerReferences1Inner::class,
    ];

    /**
     * @param  string  $consolidationType  Specify the consolidation type.
     * @param  ShipperParty  $shipper  The descriptive information for the customer shipping the package along with the physical location from where the shipment originates.
     * @param  InternationalDistributionDetail  $internationalDistributionDetail  Specifies the international distribution detail.
     * @param  CustomsClearanceDetail  $customsClearanceDetail  Required for International and intra-country Shipments. Information about this package that only applies to an international (export) shipment or return.
     * @param  ?string  $shipDate  This is the ship date for the outbound shipment associated with a return shipment. The format is YYYY-MM-DD.<br> Example: 2019-10-01
     * @param  ?Origin  $origin  The descriptive information for the customer origin.
     * @param  ?SoldToParty  $soldTo  Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
     * @param  ?string  $bookingNumber  Specifies the booking number.
     * @param  ?DistributionLocations  $distributionLocation  Specifies the distribution locations for consolidation.<br> Mandatory for International Ground Distribution.
     * @param  ConsolidationDataSources1Inner[]|null  $consolidationDataSources  Specifies how selected values in the consolidation are to be determined.
     * @param  CustomerReferences1Inner[]|null  $customerReferences  These are additional customer reference data for commercial invoice.
     * @param  ?LabelSpecification2  $labelSpecification  These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.<br> Mandatory as it is needed during confirming consolidation. If it is not passed while creating consolidation it will fail during confirming consolidation.
     * @param  ?TransborderDistributionDetail  $transborderDistributionDetail  Specifies attributes of a shipment whithin a transborder distribution.
     * @param  ?ConsolidationDocumentSpec  $consolidationDocumentSpecification  Details of consolidation document specification
     * @param  ?Payment  $shippingChargesPayment  Details about who and how the shipment will be paid for. 'payor' is optional when 'paymentType' provided is SENDER.
     * @param  ?string  $description  Description of the package item.
     * @param  ?RequestedConsolidationSpecialServicesRequested  $specialServicesRequested  These special services are available at the shipment level for some or all service types.
     * @param  ?ConsolidationProcessingOptionsRequested  $processingOption  specifies the processing options requested.
     * @param  ?string  $crnShippingDocumentTypes  Indicates the types of shipping documents requested
     */
    public function __construct(
        public string $consolidationType,
        public ShipperParty $shipper,
        public InternationalDistributionDetail $internationalDistributionDetail,
        public CustomsClearanceDetail $customsClearanceDetail,
        public ?string $shipDate = null,
        public ?Origin $origin = null,
        public ?SoldToParty $soldTo = null,
        public ?string $bookingNumber = null,
        public ?DistributionLocations $distributionLocation = null,
        public ?array $consolidationDataSources = null,
        public ?array $customerReferences = null,
        public ?LabelSpecification2 $labelSpecification = null,
        public ?TransborderDistributionDetail $transborderDistributionDetail = null,
        public ?ConsolidationDocumentSpec $consolidationDocumentSpecification = null,
        public ?Payment $shippingChargesPayment = null,
        public ?string $description = null,
        public ?RequestedConsolidationSpecialServicesRequested $specialServicesRequested = null,
        public ?ConsolidationProcessingOptionsRequested $processingOption = null,
        public ?string $crnShippingDocumentTypes = null,
    ) {}
}
