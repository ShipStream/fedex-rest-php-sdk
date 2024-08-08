<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class MessageParameter extends Dto
{
    /**
     * @param  ?string  $id  Message parameter code.<br>Example: message ID
     * @param  ?string  $value  Message parameter value of the code.<br>Example: value
     */
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $value = null,
    ) {
    }
}
