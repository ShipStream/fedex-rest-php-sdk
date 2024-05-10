<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchema extends Dto
{
    /**
     * @param  LtlRootAccountNumber  $accountNumber  This is the Account number details.<br><i>Note:<ul><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     * @param  LtlRequestedShipment  $freightRequestedShipment  This contains shipment data describing the shipment for which a  freight rate quote (or rate-shopping comparison) is desired.
     * @param  ?LtlRateRequestControlParameters  $rateRequestControlParameters  These are various parameters you can provide for filtering and sorting  capability in the response, such as transit time and commit data, rate sort order etc.
     */
    public function __construct(
        public readonly LtlRootAccountNumber $accountNumber,
        public readonly LtlRequestedShipment $freightRequestedShipment,
        public readonly ?LtlRateRequestControlParameters $rateRequestControlParameters = null,
    ) {
    }
}
