<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightPickupAvailabilityOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?string  $closeTime  Indicates the close time corresponding to the close time type .<br>Example: 12:00:00-05:00
     * @param  ?string  $closeTimeType  Identifies whether the close time is specified by the customer or is the default time.
     * @param  ?string  $localTime  A string used to represent the concept of local time at particular location. The format is hh:mm. The local time format does not contain any representation for the time zone.<br>Example: 19:20
     * @param  ?string[]  $options  Indicates the format options. SUPPRESS_ADDITIONAL_LANGUAGES value will suppress English language if another language is specified in the language code field.
     * @param  Alert[]|null  $alerts  The cxs alert code, alert type, and alert message obtained when a rate quote is requested.
     */
    public function __construct(
        public readonly ?string $closeTime = null,
        public readonly ?string $closeTimeType = null,
        public readonly ?string $localTime = null,
        public readonly ?array $options = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
