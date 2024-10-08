<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class DeleteShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => Alert::class];

    /**
     * @param  ?bool  $cancelledShipment  Indicates whether the shipment has been cancelled or not. If the value is True, then it indicates that the shipment has been cancelled.<br>Example: true
     * @param  ?string  $message  The message generated during cancellation request for Shipment.<br>Example: Success
     * @param  Alert[]|null  $alerts  This is a cancellation request alert. This alert includes information such as alert code, alert type, and alert message.
     */
    public function __construct(
        public ?bool $cancelledShipment = null,
        public ?string $message = null,
        public ?array $alerts = null,
    ) {}
}
