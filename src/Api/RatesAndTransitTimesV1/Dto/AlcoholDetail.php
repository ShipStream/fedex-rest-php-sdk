<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class AlcoholDetail extends Dto
{
    /**
     * @param  string  $alcoholRecipientType  Specify the recipient type for the alcohol shipment.
     * @param  ?string  $shipperAgreementType  Specify the shipper entity type. <br>Example: Fulfillment house, Retailer or a Winery.
     */
    public function __construct(
        public readonly string $alcoholRecipientType,
        public readonly ?string $shipperAgreementType = null,
    ) {
    }
}
