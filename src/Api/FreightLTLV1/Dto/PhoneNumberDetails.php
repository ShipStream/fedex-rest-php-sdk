<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PhoneNumberDetails extends Dto
{
    /**
     * @param  ?string  $phoneNumber  Indicates the phone number.<br> Example: 7194446666
     * @param  ?string  $phoneNumberType  Indicates the phone number type.<br> Example: <ul><li>FAX</li><li>HOME</li><li>MOBILE</li><li>PAGER</li><li>TOLL_FREE</li><li>WORK</li></ul>
     */
    public function __construct(
        public readonly ?string $phoneNumber = null,
        public readonly ?string $phoneNumberType = null,
    ) {
    }
}
