<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class TaxpayerIdentification extends Dto
{
    /**
     * @param  string  $number  Specify tax ID number. Maximum length is 18.
     * @param  ?string  $tinType  Identifies the type of Tax Identification Number in Shipment processing. This is required when the tins array of objects is supplied.
     * @param  ?string  $usage  Identifies the usage of Tax Identification Number in Shipment processing.
     * @param  ?string  $effectiveDate  Effective Date.<br>Example: 2000-01-23T04:56:07.000+00:00
     * @param  ?string  $expirationDate  Expiration Date.<br>Example: 2000-01-23T04:56:07.000+00:00
     */
    public function __construct(
        public string $number,
        public ?string $tinType = null,
        public ?string $usage = null,
        public ?string $effectiveDate = null,
        public ?string $expirationDate = null,
    ) {}
}