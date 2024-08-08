<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageOperationalDetail extends Dto
{
    protected static array $complexArrayTypes = ['operationalInstructions' => OperationalInstructions::class];

    /**
     * @param  ?string  $astraHandlingText  Human-readable text for pre-January 2011 clients.<br>Example: astraHandlingText
     * @param  ?PackageBarcodes  $barcodes  Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
     * @param  OperationalInstructions[]|null  $operationalInstructions
     */
    public function __construct(
        public readonly ?string $astraHandlingText = null,
        public readonly ?PackageBarcodes $barcodes = null,
        public readonly ?array $operationalInstructions = null,
    ) {
    }
}
