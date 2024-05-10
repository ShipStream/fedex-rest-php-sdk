<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomsClearanceDetail extends Dto
{
    protected static array $complexArrayTypes = ['commodities' => [Commodity::class], 'brokers' => [BrokerDetail::class]];

    /**
     * @param  Commodity[]  $commodities  Specify the commodity details.
     * @param  BrokerDetail[]|null  $brokers  Conditional.<br>Required if BROKER_SELECT_OPTION is specified as a shipment special service type.  A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     * @param  ?CommercialInvoice  $commercialInvoice  The Commercial Invoice element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the 'ETDDetail/RequesteDocumentCopies' element.<br> Support consists of a Maximum of 99 commodity line items.
     * @param  ?string  $freightOnValue  Indicates Freight on value for customs.
     * @param  ?Payment  $dutiesPayment  These are details about shipment payment. Value payor is optional when paymentType provided as SENDER.
     */
    public function __construct(
        public readonly array $commodities,
        public readonly ?array $brokers = null,
        public readonly ?CommercialInvoice $commercialInvoice = null,
        public readonly ?string $freightOnValue = null,
        public readonly ?Payment $dutiesPayment = null,
    ) {
    }
}
