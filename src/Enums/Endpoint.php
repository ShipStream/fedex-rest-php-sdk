<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Enums;

use ShipStream\FedEx\Traits\EnumTrait;

enum Endpoint: string
{
    use EnumTrait;

    case PROD = 'https://apis.fedex.com';
    case SANDBOX = 'https://apis-sandbox.fedex.com';

    public static function host(Endpoint $endpoint): string
    {
        return str_replace('https://', '', $endpoint->value);
    }
}
