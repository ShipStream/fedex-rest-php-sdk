<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryWaiver extends Dto
{
    protected static array $complexArrayTypes = ['advisories' => Message::class];

    /**
     * @param  Message[]|null  $advisories  Indicates the advisories list.
     * @param  ?string  $description  Indicates the regulatory prohibitions description.<br>Example: description
     * @param  ?string  $id  Indicates the prohibitory ID.<br>Example: id
     */
    public function __construct(
        public ?array $advisories = null,
        public ?string $description = null,
        public ?string $id = null,
    ) {}
}