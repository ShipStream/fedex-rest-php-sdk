<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlRequestedShipment extends Dto
{
    protected static array $complexArrayTypes = ['requestedPackageLineItems' => [LtlRequestedPackageLineItem::class]];

    /**
     * @param  RateParty  $shipper  Specify the shipper address details.
     * @param  RateParty  $recipient  Specify the shipper address details.
     * @param  LtlRequestedPackageLineItem[]  $requestedPackageLineItems  One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for freight shipments.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     * @param  LtlFreightShipmentDetail  $freightShipmentDetail  Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services
     * @param  ?string  $serviceType  The FedEx service type for the shipment. The results will be filtered by the serviceType value indicated.  If no serviceType is indicated then all the applicable services and corresponding rates will be returned.Allowed service types are FEDEX_FREIGHT_PRIORITY and FEDEX_FREIGHT_ECONOMY.
     * @param  ?string  $preferredCurrency  Indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).  Used in conjunction with the rateRequestType data element.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'> Click here to see Currency Codes</a>
     * @param  ?LtlPayment  $shippingChargesPayment  These are details about shipment payment.
     * @param  ?string[]  $rateRequestType  Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li></ul>Examples: ["INCENTIVE", "LIST"]
     * @param  ?string  $shipDateStamp  This is the Shipment date. Required for future ship date rates.Default is current date if not indicated or date is in the past.<br>The format is YYYY-MM-DD<br> Example: 2019-09-06
     * @param  ?int  $totalPackageCount  Conditional<br>Indicates the total number of packages in the shipment. <br>The Maximum number of packages in a rate request is 100.
     * @param  ?int  $totalWeight  Conditional. Identifies the total weight of the shipment being conveyed to FedEx.
     *                             This is only applicable to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?LtlShipmentSpecialServicesRequested  $freightShipmentSpecialServices  Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Valid values are:<ul><li>FREIGHT_GUARANTEE</li><li>COD</li><li>BROKER_SELECT_OPTION</li><li>DANGEROUS_GOODS</li><li>FOOD</li><li>POISON</li><li> INSIDE_DELIVERY</li><li>INSIDE_PICKUP</li><li>LIFTGATE_PICKUP</li><li>LIFTGATE_DELIVERY</li><li>LIMITED_ACCESS_PICKUP</li><li> LIMITED_ACCESS_DELIVERY</li><li>DO_NOT_STACK_PALLETS</li><li> DO_NOT_BREAK_DOWN_PALLETS</li><li>CALL_BEFORE_DELIVERY</li><li> TOP_LOAD </li><li>OVER_LENGTH</li><li> EXTREME_LENGTH</li><li> PROTECTION_FROM_FREEZING</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     */
    public function __construct(
        public readonly RateParty $shipper,
        public readonly RateParty $recipient,
        public readonly array $requestedPackageLineItems,
        public readonly LtlFreightShipmentDetail $freightShipmentDetail,
        public readonly ?string $serviceType = null,
        public readonly ?string $preferredCurrency = null,
        public readonly ?LtlPayment $shippingChargesPayment = null,
        public readonly ?array $rateRequestType = null,
        public readonly ?string $shipDateStamp = null,
        public readonly ?int $totalPackageCount = null,
        public readonly ?int $totalWeight = null,
        public readonly ?LtlShipmentSpecialServicesRequested $freightShipmentSpecialServices = null,
    ) {
    }
}
