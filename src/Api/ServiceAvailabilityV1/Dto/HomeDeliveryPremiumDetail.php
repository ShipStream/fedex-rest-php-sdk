<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class HomeDeliveryPremiumDetail extends Dto
{
    /**
     * @param  ?string  $homedeliveryPremiumType  This is Home Delivery Premium Type. It allows to specify additional premium service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     */
    public function __construct(
        public readonly ?string $homedeliveryPremiumType = null,
    ) {
    }
}
