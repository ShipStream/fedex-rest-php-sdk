<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Enums;

use ShipStream\FedEx\Traits\EnumTrait;

enum Endpoint: string
{
    use EnumTrait;

    case PROD = 'https://apis.fedex.com';
    case SANDBOX = 'https://apis-sandbox.fedex.com';
    case PROD_DOCUMENTS_UPLOAD = 'https://documentapi.prod.fedex.com';
    case SANDBOX_DOCUMENTS_UPLOAD = 'https://documentapitest.prod.fedex.com/sandbox';

    public static function host(Endpoint $endpoint): string
    {
        return parse_url($endpoint->value, PHP_URL_HOST) ?: '';
    }
}
