<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class SignatureOptionDetail extends Dto
{
    /**
     * @param  ?string  $signatureReleaseNumber  Signature Release Number is required for signature option NO_SIGNATURE_REQUIRED.
     */
    public function __construct(
        public ?string $signatureReleaseNumber = null,
    ) {}
}
