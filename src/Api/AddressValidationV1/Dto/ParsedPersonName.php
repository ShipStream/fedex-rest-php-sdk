<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ParsedPersonName extends Dto
{
    /**
     * @param  string  $firstName  First Name <br>Example: Edwin
     * @param  string  $lastName  Last Name <br>Example: Luies
     * @param  ?string  $middleName  Middle Name <br>Example: Thomas
     * @param  ?string  $suffix  Suffix <br>Example: Jr
     */
    public function __construct(
        public readonly string $firstName,
        public readonly string $lastName,
        public readonly ?string $middleName = null,
        public readonly ?string $suffix = null,
    ) {
    }
}
