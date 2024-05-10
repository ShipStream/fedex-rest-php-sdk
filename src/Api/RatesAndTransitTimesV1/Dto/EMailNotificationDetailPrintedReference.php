<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class EMailNotificationDetailPrintedReference extends Dto
{
    /**
     * @param  ?string  $printedReferenceType  Indicates the printed reference type.
     * @param  ?string  $value  Specifies printed reference value.
     */
    public function __construct(
        public readonly ?string $printedReferenceType = null,
        public readonly ?string $value = null,
    ) {
    }
}
