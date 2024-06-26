<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlFreightShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'transactionShipments' => [LtlTransactionShipmentOutputVo::class],
        'alerts' => [Alert::class],
    ];

    /**
     * @param  LtlTransactionShipmentOutputVo[]|null  $transactionShipments  The shipping transaction details, such as master tracking number, service type, and ship timestamp.
     * @param  Alert[]|null  $alerts  The cxs alert code, alert type, and alert message obtained when a rate quote is requested.
     */
    public function __construct(
        public readonly ?array $transactionShipments = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
