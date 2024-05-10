<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class StatusAncillaryDetail extends Dto
{
    /**
     * @param  ?string  $reason  Field which holds Reason code associated to the status of the shipment being tracked.<br> Example: 15,84,IN001,015A,02
     * @param  ?string  $reasonDescription  Field which holds Reason description associated to the status of the shipment being tracked.<br> Example: Customer not available or business closed,Local delivery restriction, delivery not attempted,Package delivered to recipient address - release authorized
     * @param  ?string  $action  Field which holds recommended action for customer to resolve reason.<br> Example: Contact us at <http://www.fedex.com/us/customersupport/call/index.html> to discuss possible delivery or pickup alternatives.
     * @param  ?string  $actionDescription  Field which holds recommended action description for customer to resolve reason.<br> Example: Customer not Available or Business Closed
     */
    public function __construct(
        public readonly ?string $reason = null,
        public readonly ?string $reasonDescription = null,
        public readonly ?string $action = null,
        public readonly ?string $actionDescription = null,
    ) {
    }
}
