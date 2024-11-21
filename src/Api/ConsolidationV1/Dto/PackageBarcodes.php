<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageBarcodes extends Dto
{
    protected static array $complexArrayTypes = [
        'binaryBarcodes' => BinaryBarcode::class,
        'stringBarcodes' => StringBarcode::class,
    ];

    /**
     * @param  BinaryBarcode[]|null  $binaryBarcodes
     * @param  StringBarcode[]|null  $stringBarcodes
     */
    public function __construct(
        public ?array $binaryBarcodes = null,
        public ?array $stringBarcodes = null,
    ) {}
}