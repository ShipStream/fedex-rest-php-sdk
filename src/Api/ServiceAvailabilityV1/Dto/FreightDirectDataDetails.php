<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightDirectDataDetails extends Dto
{
    protected static array $complexArrayTypes = ['phoneNumberDetails' => [PhoneNumberDetail::class]];

    /**
     * @param  ?string  $type  This field provides the type for FedexFreight Detail service.<br> Example: <ul><li>BASIC</li><li>BASIC_BY_APPOINTMENT</li><li>PREMIUM</li><li>STANDARD</li></ul>
     * @param  ?string  $transportationType  This field provides the transportation type for Fedex Freight Detail service.<br> Example: <ul><li>DELIVERY</li><li>PICKUP</li></ul>
     * @param  ?string  $eMailAddress  This field provides the email address associated with the freight user
     * @param  PhoneNumberDetail[]|null  $phoneNumberDetails  Phone Number Details
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $transportationType = null,
        public readonly ?string $eMailAddress = null,
        public readonly ?array $phoneNumberDetails = null,
    ) {
    }
}
