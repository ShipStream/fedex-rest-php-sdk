<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightDirectDataDetails extends Dto
{
    protected static array $complexArrayTypes = ['phoneNumberDetails' => [FreightPhoneNumberDetail::class]];

    /**
     * @param  ?string  $type  This field provides the type for FedexFreight Detail service.<br> Example: <ul><li>BASIC</li><li>BASIC_BY_APPOINTMENT</li><li>PREMIUM</li><li>STANDARD</li></ul>
     * @param  ?string  $transportationType  This field provides the transportation type for Fedex Freight Detail service.<br> Example: <ul><li>DELIVERY</li><li>PICKUP</li></ul>
     * @param  ?string  $emailAddress  This field provides the email address associated.
     * @param  FreightPhoneNumberDetail[]|null  $phoneNumberDetails
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $transportationType = null,
        public readonly ?string $emailAddress = null,
        public readonly ?array $phoneNumberDetails = null,
    ) {
    }
}
