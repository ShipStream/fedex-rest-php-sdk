<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryMessage extends Dto
{
    protected static array $complexArrayTypes = ['messageParameters' => [MessageParameters::class]];

    /**
     * @param  ?string  $code  Indicates the message code.
     * @param  MessageParameters[]|null  $messageParameters  Value indicating the translated text.
     * @param  ?int  $index  Non negative integer value indicating the index of the commodity description.
     * @param  ?string  $text  Indicates the content of the user-instructional message in English.
     * @param  ?string  $localizedText  This is the return message from the service provider in local language.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $messageParameters = null,
        public readonly ?int $index = null,
        public readonly ?string $text = null,
        public readonly ?string $localizedText = null,
    ) {
    }
}
