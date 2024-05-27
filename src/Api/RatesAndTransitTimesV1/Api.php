<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto\FullSchemaQuoteRate;
use ShipStream\FedEx\Api\RatesAndTransitTimesV1\Requests\RateAndTransitTimes;
use ShipStream\FedEx\BaseResource;

class Api extends BaseResource
{
    /**
     * @param  FullSchemaQuoteRate  $fullSchemaQuoteRate  The request elements for requesting a rate quote.
     */
    public function rateAndTransitTimes(FullSchemaQuoteRate $fullSchemaQuoteRate): Response
    {
        return $this->connector->send(new RateAndTransitTimes($fullSchemaQuoteRate));
    }
}
