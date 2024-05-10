<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class SignatureOptionDetail extends Dto
{
    /**
     * @param  ?string  $signatureReleaseNumber  This is release number.<br>Example: 23456
     */
    public function __construct(
        public readonly ?string $signatureReleaseNumber = null,
    ) {
    }
}
