<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class PriorityAlertDetail extends Dto
{
    /**
     * @param  ?string[]  $enhancementTypes  The types of all enhancement for the Priority Alert<br>Example: PRIORITY_ALERT_PLUS
     * @param  ?string[]  $content  Specifies Content for the Priority Alert Detail.
     */
    public function __construct(
        public readonly ?array $enhancementTypes = null,
        public readonly ?array $content = null,
    ) {
    }
}
