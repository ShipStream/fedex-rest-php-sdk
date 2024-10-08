<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DeletePackagesFromOpenShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => Alert::class];

    /**
     * @param  ?bool  $deletedPackagesFromOpenshipment  This element shows the status of openshipment packages deletion
     * @param  Alert[]|null  $alerts  The alerts received when a Shipment is processed. This includes the alert code, alert type, and alert message.
     */
    public function __construct(
        public ?bool $deletedPackagesFromOpenshipment = null,
        public ?array $alerts = null,
    ) {}
}
