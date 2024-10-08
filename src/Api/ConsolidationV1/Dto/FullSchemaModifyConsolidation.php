<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaModifyConsolidation extends Dto
{
    /**
     * @param  ConsolidationKey  $consolidationKey  Identifies the consolidation to which this open shipment should be added after successful creation.
     * @param  RequestedConsolidation  $requestedConsolidation  Specify the requested consolidation
     * @param  PartyAccountNumber  $accountNumber  Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx account number.
     */
    public function __construct(
        public ConsolidationKey $consolidationKey,
        public RequestedConsolidation $requestedConsolidation,
        public PartyAccountNumber $accountNumber,
    ) {}
}
