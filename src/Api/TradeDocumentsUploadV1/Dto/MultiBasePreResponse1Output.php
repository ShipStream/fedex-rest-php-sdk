<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class MultiBasePreResponse1Output extends Dto
{
    protected static array $complexArrayTypes = ['documentResponses' => MultiDocumentPreResponse::class];

    /**
     * @param  MultiDocumentPreResponse[]|null  $documentResponses
     */
    public function __construct(
        public readonly ?array $documentResponses = null,
    ) {
    }
}