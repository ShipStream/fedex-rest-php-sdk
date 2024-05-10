<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class AlcoholDetail extends Dto
{
    /**
     * @param  string  $alcoholRecipientType  Specify the Alcohol Recipient Type of the shipment. <br> Example: <br> <ul><li>LICENSEE- FedEx approved alchol shipper having appropriate licenses. </li><li> CONSUMER- Individual consumer to whom the alchol is shipped.</li></ul>
     * @param  ?string  $shipperAgreementType  Specify the type of entity, the shipper for alcohol shipment is registered such as fulfillment house, retailer or a winery.
     */
    public function __construct(
        public readonly string $alcoholRecipientType,
        public readonly ?string $shipperAgreementType = null,
    ) {
    }
}
