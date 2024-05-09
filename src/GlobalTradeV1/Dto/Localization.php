<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class Localization extends Dto
{
    /**
     * @param  ?string  $localization  Two letter language code. <br> Example: EN<br><a onclick='loadDocReference("locales")'>click here to see Locales</a>
     * @param  ?string  $localeCode  Two letter region code. <br> Example: us<br><a onclick='loadDocReference("locales")'>click here to see Locales</a>
     */
    public function __construct(
        public readonly ?string $localization = null,
        public readonly ?string $localeCode = null,
    ) {
    }
}
