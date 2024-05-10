<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DeleteOpenShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?bool  $deletedOpenshipment  Indicates if the open shipment is deleted or not. <br>Example: True
     * @param  Alert[]|null  $alerts  The alerts details received in the response.
     */
    public function __construct(
        public readonly ?bool $deletedOpenshipment = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
