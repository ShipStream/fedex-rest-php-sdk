<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ReturnShipmentDetail extends Dto
{
    /**
     * @param  string  $returnType  This is the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments. For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.
     * @param  ?ReturnEmailDetail  $returnEmailDetail  These are email details for the return shipment.
     * @param  ?ReturnMerchandiseAuthorization  $rma  This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     * @param  ?ReturnAssociationDetail  $returnAssociationDetail  Specifies the details of an outbound shipment in order to associate the return shipment to it.
     */
    public function __construct(
        public readonly string $returnType,
        public readonly ?ReturnEmailDetail $returnEmailDetail = null,
        public readonly ?ReturnMerchandiseAuthorization $rma = null,
        public readonly ?ReturnAssociationDetail $returnAssociationDetail = null,
    ) {
    }
}
