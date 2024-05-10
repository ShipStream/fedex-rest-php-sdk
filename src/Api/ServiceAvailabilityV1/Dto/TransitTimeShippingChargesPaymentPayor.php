<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeShippingChargesPaymentPayor extends Dto
{
    /**
     * @param  ?TransitTimeShippingChargesPaymentPayorResponsibleParty  $responsibleParty  Conditional. The descriptive data for the payor of the shipment and their physical address, contact and account number information.
     */
    public function __construct(
        public readonly ?TransitTimeShippingChargesPaymentPayorResponsibleParty $responsibleParty = null,
    ) {
    }
}
