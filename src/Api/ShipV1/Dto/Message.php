<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Message extends Dto
{
    protected static array $complexArrayTypes = ['parameters' => [MessageParameter::class]];

    /**
     * @param  ?string  $code  Specifies the message code for the tag created.<br>Example: code
     * @param  ?string  $text  Specifies the text message for the tag created.<br>Example: Text
     * @param  MessageParameter[]|null  $parameters  Specifies the message parameters list.
     * @param  ?string  $localizedText  Specifies the message ID and value.<br>Example: localizedText
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $text = null,
        public readonly ?array $parameters = null,
        public readonly ?string $localizedText = null,
    ) {
    }
}
