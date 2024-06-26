<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryWaiver extends Dto
{
    protected static array $complexArrayTypes = ['advisories' => [Message::class]];

    /**
     * @param  Message[]|null  $advisories  Indicates the advisories list.
     * @param  ?string  $description  Indicates the regulatory prohibitions description.<br>Example: description
     * @param  ?string  $id  Indicates the prohibitory ID.<br>Example: id
     */
    public function __construct(
        public readonly ?array $advisories = null,
        public readonly ?string $description = null,
        public readonly ?string $id = null,
    ) {
    }
}
