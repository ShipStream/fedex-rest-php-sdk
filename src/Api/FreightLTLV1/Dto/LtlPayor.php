<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlPayor extends Dto
{
    /**
     * @param  ?Party  $responsibleParty  Indicate the party to a transaction including the physical address, contact information and account number information.
     */
    public function __construct(
        public readonly ?Party $responsibleParty = null,
    ) {
    }
}
