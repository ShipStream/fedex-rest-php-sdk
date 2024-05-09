<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentRegulatoryDetailsOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'userMessages' => [RegulatoryMessage::class],
        'cxsalerts' => [CxsAlert::class],
    ];

    /**
     * @param  RegulatoryMessage[]  $userMessages  Represents User Message
     * @param  mixed[]  $countryDetails  Represents Country Details
     * @param  CxsAlert[]|null  $cxsalerts
     */
    public function __construct(
        public readonly array $userMessages,
        public readonly array $countryDetails,
        public readonly ?array $cxsalerts = null,
    ) {
    }
}
