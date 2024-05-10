<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class RateOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['rateReplyDetails' => [RateReplyDetail::class], 'alerts' => [Alert::class]];

    /**
     * @param  RateReplyDetail[]|null  $rateReplyDetails  This object will hold the rate and shipment data returned for a request.
     * @param  ?string  $quoteDate  The date on which the rate is quoted.<br> Example: 2019-09-18
     * @param  ?bool  $encoded  Specifies the encoded form of the rate. <br> Example: false
     * @param  Alert[]|null  $alerts  The alert code, alert type, and alert message obtained when a rate quote is requested.
     */
    public function __construct(
        public readonly ?array $rateReplyDetails = null,
        public readonly ?string $quoteDate = null,
        public readonly ?bool $encoded = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
