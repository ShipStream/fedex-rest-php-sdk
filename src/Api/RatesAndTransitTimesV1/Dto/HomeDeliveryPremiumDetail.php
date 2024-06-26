<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class HomeDeliveryPremiumDetail extends Dto
{
    /**
     * @param  ?PartyPhoneNumber  $phoneNumber  Indicate the phone number. Only numeric values allowed.
     * @param  ?string  $shipTimestamp  This is shipment date. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone.<br>Format: YYYY-MM-DD. <br>Example: 2019-06-26.
     * @param  ?string  $homedeliveryPremiumType  This is Home Delivery Premium Type. It allows to specify additional premimum service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     */
    public function __construct(
        public readonly ?PartyPhoneNumber $phoneNumber = null,
        public readonly ?string $shipTimestamp = null,
        public readonly ?string $homedeliveryPremiumType = null,
    ) {
    }
}
