<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactAncillaryDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'emailAddresses' => [EMailDetail::class],
        'phoneNumberDetails' => [PhoneNumberDetail::class],
    ];

    /**
     * @param  EMailDetail[]|null  $emailAddresses  These are contact email addresses.
     * @param  ?string  $prefix  Specify the Prefix.
     * @param  PhoneNumberDetail[]|null  $phoneNumberDetails  Phone Number Details
     * @param  ?CompanyName  $companyName  Use this to provide Company details.
     * @param  ?string  $title  Indicate the contact title.
     */
    public function __construct(
        public readonly ?array $emailAddresses = null,
        public readonly ?string $prefix = null,
        public readonly ?array $phoneNumberDetails = null,
        public readonly ?CompanyName $companyName = null,
        public readonly ?string $title = null,
    ) {
    }
}
