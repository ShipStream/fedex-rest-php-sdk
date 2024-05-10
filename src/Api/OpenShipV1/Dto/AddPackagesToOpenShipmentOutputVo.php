<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class AddPackagesToOpenShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'transactionShipments' => [TransactionOpenShipmentOutputVo::class],
        'alerts' => [Alert::class],
    ];

    /**
     * @param  TransactionOpenShipmentOutputVo[]|null  $transactionShipments  The shipping transaction details, such as master tracking number, service type, and ship timestamp.
     * @param  Alert[]|null  $alerts  The alerts details received in the response.
     */
    public function __construct(
        public readonly ?array $transactionShipments = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
