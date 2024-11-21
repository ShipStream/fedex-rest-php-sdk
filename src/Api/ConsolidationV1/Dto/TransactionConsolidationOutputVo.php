<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class TransactionConsolidationOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'pieceResponses' => PieceResponse::class,
        'shipmentDocuments' => LabelResponseVo::class,
    ];

    /**
     * @param  ?TransactionConsolidationOutputVoCompletedConsolidationDetail  $completedConsolidationDetail  Specifies Complete Consolidation Details when user selected ASYCHRONOUSLY_PROCESSED
     * @param  PieceResponse[]|null  $pieceResponses  Specifies the information about the pieces, received in the response.
     * @param  LabelResponseVo[]|null  $shipmentDocuments  These are shipping document details.
     */
    public function __construct(
        public ?TransactionConsolidationOutputVoCompletedConsolidationDetail $completedConsolidationDetail = null,
        public ?array $pieceResponses = null,
        public ?array $shipmentDocuments = null,
    ) {}
}