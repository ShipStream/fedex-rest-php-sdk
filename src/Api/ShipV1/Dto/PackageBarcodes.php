<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageBarcodes extends Dto
{
    protected static array $complexArrayTypes = [
        'binaryBarcodes' => [BinaryBarcode::class],
        'stringBarcodes' => [StringBarcode::class],
    ];

    /**
     * @param  BinaryBarcode[]|null  $binaryBarcodes  This is binary-style barcodes used for the package identification.
     * @param  StringBarcode[]|null  $stringBarcodes  This is string-style barcodes  used for package identification.
     */
    public function __construct(
        public readonly ?array $binaryBarcodes = null,
        public readonly ?array $stringBarcodes = null,
    ) {
    }
}
