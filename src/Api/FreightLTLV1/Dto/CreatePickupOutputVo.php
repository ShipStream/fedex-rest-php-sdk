<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CreatePickupOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?string  $pickupConfirmationCode  The confirmation number provided to the customer when a freight pickup is requested. <br> Example : XXXX101XXOS45XXXX
     * @param  Alert[]|null  $alerts  The cxs alert code, alert type, and alert message obtained when a rate quote is requested.
     */
    public function __construct(
        public readonly ?string $pickupConfirmationCode = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
