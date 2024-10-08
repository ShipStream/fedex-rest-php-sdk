<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ReturnShipmentDetail extends Dto
{
    /**
     * @param  string  $returnType  This specifies the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments.For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.<br>Valid Values : PENDING, PRINT_RETURN_LABEL<br>Example: PRINT_RETURN_LABEL
     * @param  ?ReturnEmailDetail  $returnEmailDetail  These are email details for the return shipment.
     * @param  ?ReturnMerchandiseAuthorization  $rma  This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     * @param  ?ReturnAssociationDetail  $returnAssociationDetail  Specifies the details of an outbound shipment in order to associate the return shipment to it.
     */
    public function __construct(
        public string $returnType,
        public ?ReturnEmailDetail $returnEmailDetail = null,
        public ?ReturnMerchandiseAuthorization $rma = null,
        public ?ReturnAssociationDetail $returnAssociationDetail = null,
    ) {}
}
