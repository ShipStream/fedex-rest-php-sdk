<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentRegulatoryDetailsOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['userMessages' => RegulatoryMessage::class, 'cxsalerts' => CxsAlert::class];

    /**
     * @param  RegulatoryMessage[]  $userMessages  Represents User Message
     * @param  CxsAlert[]|null  $cxsalerts
     */
    public function __construct(
        public array $userMessages,
        public RegulatoryCountryDetails $countryDetails,
        public ?array $cxsalerts = null,
    ) {}
}
