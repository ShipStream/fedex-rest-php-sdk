<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ModifyOpenShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'transactionShipments' => TransactionOpenShipmentOutputVo::class,
        'alerts' => Alert::class,
    ];

    /**
     * @param  ?string  $asynchronousProcessingResultsDetail  This field describes how the the shipment is processed.<br>Example: SYNCHRONOUSLY_PROCESSED
     * @param  ?string  $jobId  Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request.
     *                          Example: abc123456
     * @param  TransactionOpenShipmentOutputVo[]|null  $transactionShipments  These are output transaction details.
     * @param  Alert[]|null  $alerts  The alerts details received in the response.
     */
    public function __construct(
        public ?string $asynchronousProcessingResultsDetail = null,
        public ?string $jobId = null,
        public ?array $transactionShipments = null,
        public ?array $alerts = null,
    ) {}
}
