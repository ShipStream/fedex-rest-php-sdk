<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class DocumentRequirementsDetail extends Dto
{
    protected static array $complexArrayTypes = ['generationDetails' => DocumentGenerationDetail::class];

    /**
     * @param  ?string[]  $requiredDocuments  Provides the required documents info.
     * @param  ?string[]  $prohibitedDocuments  Provides the prohibited Documents info.
     * @param  DocumentGenerationDetail[]|null  $generationDetails  Provides the generation details.
     */
    public function __construct(
        public ?array $requiredDocuments = null,
        public ?array $prohibitedDocuments = null,
        public ?array $generationDetails = null,
    ) {}
}
