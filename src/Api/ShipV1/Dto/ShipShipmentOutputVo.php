<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'transactionShipments' => TransactionShipmentOutputVo::class,
        'alerts' => Alert::class,
    ];

    /**
     * @param  TransactionShipmentOutputVo[]|null  $transactionShipments  These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     * @param  Alert[]|null  $alerts  The alerts received when processing a shipment request.
     * @param  ?string  $jobId  Unique identifier for a Job. Example: abc123456
     */
    public function __construct(
        public ?array $transactionShipments = null,
        public ?array $alerts = null,
        public ?string $jobId = null,
    ) {}
}
