<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class AlcoholDetail extends Dto
{
    /**
     * @param  ?string  $alcoholRecipientType  Specify the Alcohol Recipient Type of the shipment. <br> Example: LICENSEE
     * @param  ?string  $shipperAgreementType  Specify the type of entity, the shipper for alcohol shipment is registered such as fulfillment house, retailer or a winery.
     */
    public function __construct(
        public readonly ?string $alcoholRecipientType = null,
        public readonly ?string $shipperAgreementType = null,
    ) {
    }
}
