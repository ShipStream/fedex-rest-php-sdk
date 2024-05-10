<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RetrieveOpenShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?RequestedShipment  $requestedShipment  The descriptive data for the requested shipment.
     * @param  Alert[]|null  $alerts  The alerts details received in the response.
     */
    public function __construct(
        public readonly ?RequestedShipment $requestedShipment = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
