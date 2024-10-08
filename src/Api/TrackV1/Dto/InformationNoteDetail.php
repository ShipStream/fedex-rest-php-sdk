<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class InformationNoteDetail extends Dto
{
    /**
     * @param  ?string  $code  Field which holds the code that designates the type of informational message being returned. <br>Example: 'CLEARANCE_ENTRY_FEE_APPLIES'
     * @param  ?string  $description  Field which holds the The informational message in human readable form.<br> Example: this is an informational message
     */
    public function __construct(
        public ?string $code = null,
        public ?string $description = null,
    ) {}
}
