<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class CreatePickupOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?string  $pickupConfirmationCode  The confirmation number provided to the customer when a pickup is requested <br> Example : 3001
     * @param  ?string  $message  Human-readable text that explains pickup notification <br> Example: Courier on the way
     * @param  ?string  $location  The location from where the package will be picked up. <br><br><i>Note: The location will only be returned for Express Pickup.<i><br><br>Example: COSA
     * @param  Alert[]|null  $alerts  These are optional alerts received when a Create pickup is requested. This includes an alert code, type, and message.
     */
    public function __construct(
        public readonly ?string $pickupConfirmationCode = null,
        public readonly ?string $message = null,
        public readonly ?string $location = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
