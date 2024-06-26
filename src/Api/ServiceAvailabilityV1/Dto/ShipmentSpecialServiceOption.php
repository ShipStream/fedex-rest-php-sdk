<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentSpecialServiceOption extends Dto
{
    /**
     * @param  ?string  $customerIntegrationMode  Specifies customer Integration Mode
     * @param  ?string  $astraDescription  Specifies the astra label description
     * @param  ?string[]  $ltlPaymentTerms
     * @param  ?string  $subType  Specifies sub-type of the special service option
     * @param  ?string  $value  Specifies the value of the special service option.
     * @param  ?string  $specialServiceType  Specify special services requested for the package.<br>Example: BROKER_SELECT_OPTION<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment Level Special Service Types.</a>
     */
    public function __construct(
        public readonly ?string $customerIntegrationMode = null,
        public readonly ?string $astraDescription = null,
        public readonly ?array $ltlPaymentTerms = null,
        public readonly ?string $subType = null,
        public readonly ?string $value = null,
        public readonly ?string $specialServiceType = null,
    ) {
    }
}
