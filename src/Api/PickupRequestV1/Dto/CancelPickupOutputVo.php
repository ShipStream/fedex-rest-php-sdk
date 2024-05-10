<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class CancelPickupOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?string  $pickupConfirmationCode  Specify the pickup confirmation code. <br> Example: NQAA97
     * @param  ?string  $cancelConfirmationMessage  Indicates a cancelled pickup confirmation message.<br> Example: Requested pickup has been cancelled successfully.
     * @param  Alert[]|null  $alerts  These are optional alerts received when a Create pickup is requested. This includes an alert code, type, and message.
     */
    public function __construct(
        public readonly ?string $pickupConfirmationCode = null,
        public readonly ?string $cancelConfirmationMessage = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
