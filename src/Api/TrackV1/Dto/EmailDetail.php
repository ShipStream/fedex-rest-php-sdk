<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailDetail extends Dto
{
    /**
     * @param  string  $emailAddress  Specifies email address on which user wants to get notified for various registered events.<br>Example: p1@fedex.com
     * @param  ?string  $name  Specifies the name of the notification recipient.<br>Example: Sam Smith
     */
    public function __construct(
        public string $emailAddress,
        public ?string $name = null,
    ) {}
}
