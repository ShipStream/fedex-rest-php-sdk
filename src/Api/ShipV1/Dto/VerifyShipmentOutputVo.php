<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class VerifyShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  Alert[]|null  $alerts  The alerts received when processing a shipment request.
     */
    public function __construct(
        public readonly ?array $alerts = null,
    ) {
    }
}
