<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CancelFreightPickupOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?string  $pickupConfirmationCode  This is the Pickup confirmation code. <br> Example: XXXX1007MEM62XXXX
     * @param  ?string  $cancelConfirmationMessage  Indicates the confirmation message for cancelled pickup.<br> Example: Requested pickup has been cancelled Successfully.
     * @param  Alert[]|null  $alerts  The cxs alert code, alert type, and alert message obtained when a rate quote is requested.
     */
    public function __construct(
        public readonly ?string $pickupConfirmationCode = null,
        public readonly ?string $cancelConfirmationMessage = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
