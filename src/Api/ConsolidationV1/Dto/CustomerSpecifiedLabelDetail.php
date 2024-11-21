<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomerSpecifiedLabelDetail extends Dto
{
    protected static array $complexArrayTypes = ['regulatoryLabels' => RegulatoryLabelContentDetail::class];

    /**
     * @param  ?string[]  $maskedData  Specifies the name of data elements/areas which may be suppressed from printing on labels.
     * @param  RegulatoryLabelContentDetail[]|null  $regulatoryLabels  Specifies details needed to generate any label artifacts required due to regulatory requirements
     * @param  ?DocTabContent  $docTabContent  Specifies details of doc tab content, If provided, thermal documents will include specified doc tab content. If omitted, document will be produced without doc tab content.
     */
    public function __construct(
        public ?array $maskedData = null,
        public ?array $regulatoryLabels = null,
        public ?DocTabContent $docTabContent = null,
    ) {}
}