<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PostalCodeValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ValidatePostalOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'alerts' => [Alert::class],
        'locationDescriptions' => [LocationDescription::class],
    ];

    /**
     * @param  ?string  $countryCode  The two-letter code used to identify a country. <br>Example:US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string  $cityFirstInitials  Initials of the City
     * @param  ?string  $stateOrProvinceCode  This is the state or province code. Format and presence of this element will vary, depending on country. <br> Max length is 2. <br> Example: US<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     * @param  Alert[]|null  $alerts  This object specifies Alert details returned in the reply such as code, message and any other parameters.
     * @param  LocationDescription[]|null  $locationDescriptions  This object specifies location details returned in the reply such as location ID, service area and airport ID etc.
     * @param  ?string  $cleanedPostalCode  This is a cleaned postal code returned in the reply.</br>Example: 94267<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     */
    public function __construct(
        public readonly ?string $countryCode = null,
        public readonly ?string $cityFirstInitials = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?array $alerts = null,
        public readonly ?array $locationDescriptions = null,
        public readonly ?string $cleanedPostalCode = null,
    ) {
    }
}
