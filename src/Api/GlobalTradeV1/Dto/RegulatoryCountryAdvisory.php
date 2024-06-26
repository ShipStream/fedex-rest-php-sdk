<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryCountryAdvisory extends Dto
{
    protected static array $complexArrayTypes = ['messages' => [Message::class]];

    /**
     * @param  ?string  $types  Specifies the advisory type.
     * @param  Message[]|null  $messages  Specifies code and other parameters.
     */
    public function __construct(
        public readonly ?string $types = null,
        public readonly ?array $messages = null,
    ) {
    }
}
