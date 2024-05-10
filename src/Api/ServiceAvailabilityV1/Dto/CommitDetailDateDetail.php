<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class CommitDetailDateDetail extends Dto
{
    /**
     * @param  ?string  $dayOfWeek  This is a day of week in a shorter day format<br>Example: MON, TUE
     * @param  ?string  $time  This is time in a day. <br> Format: [HH:MM:SS]<br>example: 09:30:00
     * @param  ?string  $day  This is the day in format [MM-DD-YYYY]<br>example: Apr-13-2021
     */
    public function __construct(
        public readonly ?string $dayOfWeek = null,
        public readonly ?string $time = null,
        public readonly ?string $day = null,
    ) {
    }
}
