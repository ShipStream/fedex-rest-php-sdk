<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class Message extends Dto
{
    protected static array $complexArrayTypes = ['parameters' => [MessageParameter::class]];

    /**
     * @param  ?string  $code  Specifies the advisory document related code.
     * @param  ?string  $text  Specifies names of the regulatory advisories.
     * @param  MessageParameter[]|null  $parameters  Specifies information related to the advisories and their relevant parameters.
     * @param  ?string  $localizedText  This provides the specifics of the regulations.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $text = null,
        public readonly ?array $parameters = null,
        public readonly ?string $localizedText = null,
    ) {
    }
}
