<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlRequestedShipment extends Dto
{
    protected static array $complexArrayTypes = ['requestedPackageLineItems' => [LtlRequestedPackageLineItem::class]];

    /**
     * @param  mixed[]  $shipper  The descriptive data for the physical location from which the shipment originates.
     * @param  mixed[]  $recipient  Specifies the recipient details.
     * @param  LtlRequestedPackageLineItem[]  $requestedPackageLineItems  One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for freight shipments.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     * @param  mixed[]  $freightShipmentDetail  Required when using freight related services.
     * @param  ?string  $serviceType  The FedEx service type for the shipment. The results will be filtered by the serviceType value indicated.  If no serviceType is indicated then all the applicable services and corresponding rates will be returned.Allowed service types are FEDEX_FREIGHT_PRIORITY and FEDEX_FREIGHT_ECONOMY.
     * @param  ?string  $preferredCurrency  Indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).  Used in conjunction with the rateRequestType data element.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'> Click here to see Currency Codes</a>
     * @param  ?mixed[]  $shippingChargesPayment  Indicate the payment details specifying the method and means of payment to FedEx for providing shipping services.
     * @param  ?string[]  $rateRequestType  Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li></ul>Examples: ["INCENTIVE", "LIST"]
     * @param  ?string  $shipDateStamp  This is the Shipment date. Required for future ship date rates.Default is current date if not indicated or date is in the past.<br>The format is YYYY-MM-DD<br> Example: 2019-09-06
     * @param  ?int  $totalPackageCount  Conditional<br>Indicates the total number of packages in the shipment. <br>The Maximum number of packages in a rate request is 100.
     * @param  ?int  $totalWeight  Conditional. Identifies the total weight of the shipment being conveyed to FedEx.
     *                             This is only applicable to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?mixed[]  $freightShipmentSpecialServices  Specify the special services requested at the shipment level.<br>This has to be specified if rate is data needed for the special services.
     */
    public function __construct(
        public readonly array $shipper,
        public readonly array $recipient,
        public readonly array $requestedPackageLineItems,
        public readonly array $freightShipmentDetail,
        public readonly ?string $serviceType = null,
        public readonly ?string $preferredCurrency = null,
        public readonly ?array $shippingChargesPayment = null,
        public readonly ?array $rateRequestType = null,
        public readonly ?string $shipDateStamp = null,
        public readonly ?int $totalPackageCount = null,
        public readonly ?int $totalWeight = null,
        public readonly ?array $freightShipmentSpecialServices = null,
    ) {
    }
}
