<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaCreateTag extends Dto
{
    /**
     * @param  PartyAccountNumber  $accountNumber  The account number of the recipient.
     */
    public function __construct(
        public CreateTagRequestedShipment $requestedShipment,
        public PartyAccountNumber $accountNumber,
    ) {}
}
