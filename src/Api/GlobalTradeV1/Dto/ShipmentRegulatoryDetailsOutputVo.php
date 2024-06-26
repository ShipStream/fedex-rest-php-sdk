<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentRegulatoryDetailsOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'userMessages' => [RegulatoryMessage::class],
        'cxsalerts' => [CxsAlert::class],
    ];

    /**
     * @param  RegulatoryMessage[]  $userMessages  Represents User Message
     * @param  CxsAlert[]|null  $cxsalerts
     */
    public function __construct(
        public readonly array $userMessages,
        public readonly RegulatoryCountryDetails $countryDetails,
        public readonly ?array $cxsalerts = null,
    ) {
    }
}
