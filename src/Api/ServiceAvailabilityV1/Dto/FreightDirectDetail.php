<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightDirectDetail extends Dto
{
    protected static array $complexArrayTypes = ['freightDirectDataDetails' => [FreightDirectDataDetails::class]];

    /**
     * @param  FreightDirectDataDetails[]|null  $freightDirectDataDetails  This field provides the list of data for Fedex Direct Detail service.There can be maximum of two allowed values for this field.
     */
    public function __construct(
        public readonly ?array $freightDirectDataDetails = null,
    ) {
    }
}
