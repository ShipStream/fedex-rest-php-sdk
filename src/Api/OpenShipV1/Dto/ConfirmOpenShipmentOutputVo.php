<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ConfirmOpenShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'transactionShipments' => [TransactionOpenShipmentOutputVo::class],
        'alerts' => [Alert::class],
    ];

    /**
     * @param  ?string  $jobId  Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request. Example: abc123456
     * @param  TransactionOpenShipmentOutputVo[]|null  $transactionShipments  The shipping transaction details, such as master tracking number, service type, and ship timestamp.
     * @param  Alert[]|null  $alerts  The alerts details received in the response.
     */
    public function __construct(
        public readonly ?string $jobId = null,
        public readonly ?array $transactionShipments = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
