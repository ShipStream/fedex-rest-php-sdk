<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DeletePackagesFromOpenShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?bool  $deletedPackagesFromOpenshipment  This element shows the status of openshipment packages deletion
     * @param  Alert[]|null  $alerts  The alerts details received in the response.
     */
    public function __construct(
        public readonly ?bool $deletedPackagesFromOpenshipment = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
