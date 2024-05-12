<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageAndOptionsRequestedShipment2 extends Dto
{
    protected static array $complexArrayTypes = [
        'recipients' => [TransitTimeRecipient::class],
        'requestedPackageLineItems' => [TransitTimeRequestedPackageLineItem::class],
    ];

    /**
     * @param  PartyShipper  $shipper  The shipper details, such as postal code, state or province code, and country code of the shipper.
     * @param  TransitTimeRecipient[]  $recipients  Provide recipients physical location/address details to where the shipment delivered.
     * @param  ?string  $shipDateStamp  Required.<br>Specify the Shipment date. Required for future ship date. Default is current date if not indicated or date is in the past. <br>Format is YYYY-MM-DD.<br>Example: 2019-09-06
     * @param  TransitTimeRequestedPackageLineItem[]|null  $requestedPackageLineItems  One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.  Not used for FREIGHT.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     * @param  ?FreightShipmentDetail  $freightShipmentDetail  Conditional
     *
     * Details specific to a FedEx Freight LTL shipment (i.e. FedEx Priority and Economy Freight). If freight shipment detail is applicable, then the following fields are required. 'aliasID', 'clientDiscountPercent', 'fedExFreightAccountNumber', 'fedExFreightBillingContactAndAddress', 'lineItem', and 'role'.
     * @param  ?ShipmentSpecialServicesRequested  $specialServicesRequested  The types of all optional special services requested for the shipment
     * @param  ?string  $pickupType  Conditional Required for Express and Ground, but optional for FREIGHT or SMARTPOST.<br>Indicate the pickup type method by which the shipment yo be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a><br>Note:For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) pickupType is mandatory.
     */
    public function __construct(
        public readonly PartyShipper $shipper,
        public readonly array $recipients,
        public readonly ?string $shipDateStamp = null,
        public readonly ?array $requestedPackageLineItems = null,
        public readonly ?FreightShipmentDetail $freightShipmentDetail = null,
        public readonly ?ShipmentSpecialServicesRequested $specialServicesRequested = null,
        public readonly ?string $pickupType = null,
    ) {
    }
}
