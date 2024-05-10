<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailDetail extends Dto
{
    /**
     * @param  ?string  $address  Specifies the email address.<br>Example: sample@gmail.com
     * @param  ?string  $locale  Specifies the language in which the email needs to be sent.Default value is en_US.<br>Example: en_US. .<br><a onclick='loadDocReference("locales")'>Click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     */
    public function __construct(
        public readonly ?string $address = null,
        public readonly ?string $locale = null,
    ) {
    }
}
