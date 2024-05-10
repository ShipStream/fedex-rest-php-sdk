<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeOutput extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class], 'transitTimes' => [TransitTime::class]];

    /**
     * @param  Alert[]|null  $alerts  These are alert details received with the response.
     * @param  TransitTime[]|null  $transitTimes  These are services and transit times details received in the response.
     * @param  ?bool  $encoded  This field specifies the encoded flag.
     */
    public function __construct(
        public readonly ?array $alerts = null,
        public readonly ?array $transitTimes = null,
        public readonly ?bool $encoded = null,
    ) {
    }
}
