<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedShipment extends Dto
{
    protected static array $complexArrayTypes = [
        'requestedPackageLineItems' => [TransitTimeRequestedPackageLineItem::class],
    ];

    /**
     * @param  Party  $shipper  optional information about sender/recipient including Address, Contact, Account number.
     * @param  Party  $recipient  optional information about sender/recipient including Address, Contact, Account number.
     * @param  string  $packagingType  Specifies packaging Type.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     * @param  TransitTimeRequestedPackageLineItem[]  $requestedPackageLineItems  One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.  Not used for FREIGHT.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     * @param  ?string  $serviceType  Indicate the FedEx service type used for the shipment. The result will be filtered by the serviceType value indicated.If a serviceType is not indicated, then all the applicable services and corresponding rates will be returned.<br> Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a><br>
     * @param  ?string  $shipDateStamp  Conditional. Used to filter results to a specific ship date if populated on the request. Value will be defaulted to the current date/time.<br>Format: [YYYY-MM-DDThh:mm:ssTZD]<br>Example: 2020-10-13T11:00:00TZD<br>Note:<br>1.The date format must be YYYY-MM-DDThh:mm:ssTZD.<br>2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code.<br>5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     * @param  ?string  $dropoffType  Conditional <br> Required for Express and Ground, but optional for FREIGHT or SMARTPOST <br> Example: DROP_BOX
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Specifies Variable Handling Charge details
     * @param  ?FreightShipmentDetail  $freightShipmentDetail  Conditional
     *
     * Details specific to a FedEx Freight LTL shipment (i.e. FedEx Priority and Economy Freight). If freight shipment detail is applicable, then the following fields are required. 'aliasID', 'clientDiscountPercent', 'fedExFreightAccountNumber', 'fedExFreightBillingContactAndAddress', 'lineItem', and 'role'.
     * @param  ?ShipmentSpecialServicesRequested  $specialServicesRequested  The types of all optional special services requested for the shipment
     * @param  ?string  $pickupType  Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     * @param  ?string  $shippingDocumentSpecification  Shipping Document Specification Details
     */
    public function __construct(
        public readonly Party $shipper,
        public readonly Party $recipient,
        public readonly string $packagingType,
        public readonly array $requestedPackageLineItems,
        public readonly ?string $serviceType = null,
        public readonly ?string $shipDateStamp = null,
        public readonly ?string $dropoffType = null,
        public readonly ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
        public readonly ?FreightShipmentDetail $freightShipmentDetail = null,
        public readonly ?ShipmentSpecialServicesRequested $specialServicesRequested = null,
        public readonly ?string $pickupType = null,
        public readonly ?string $shippingDocumentSpecification = null,
    ) {
    }
}
