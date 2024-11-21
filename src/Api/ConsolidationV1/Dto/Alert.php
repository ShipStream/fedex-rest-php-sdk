<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class Alert extends Dto
{
    /**
     * @param  ?string  $code  Specifies the api alert code.
     * @param  ?string  $alertType  Specifies the api alert type.
     * @param  ?string  $message  Specifies the api alert message.
     */
    public function __construct(
        public ?string $code = null,
        public ?string $alertType = null,
        public ?string $message = null,
    ) {}
}