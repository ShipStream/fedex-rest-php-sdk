<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class SignatureOptionDetail extends Dto
{
    /**
     * @param  ?string  $signatureReleaseNumber  This is the release number. Required if signature option is NO_SIGNATURE_REQUIRED.<br> Example: 23456
     */
    public function __construct(
        public readonly ?string $signatureReleaseNumber = null,
    ) {
    }
}
