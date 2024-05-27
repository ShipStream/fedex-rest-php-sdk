<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class HomeDeliveryPremiumDetail extends Dto
{
    /**
     * @param  ?PhoneNumber  $phoneNumber  Indicate the phone number. Only numeric values allowed.<br> Note that phoneNumber is mandatory when homedeliveryPremiumType is DATE_CERTAIN or EVENING.
     * @param  ?string  $deliveryDate  This is delivery date. Required for FedEx Date Certain Home Delivery. Valid dates are Monday to Sunday. <br>There may be a delay in delivery on Sundays to locations that are geographically difficult to access.<br>Example: 2019-06-26
     * @param  ?string  $homedeliveryPremiumType  This is Home Delivery Premium Type. It allows to specify additional premimum service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     */
    public function __construct(
        public readonly ?PhoneNumber $phoneNumber = null,
        public readonly ?string $deliveryDate = null,
        public readonly ?string $homedeliveryPremiumType = null,
    ) {
    }
}
