<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomsDeclarationStatementDetail extends Dto
{
    /**
     * @param  UsmcaLowValueStatementDetail  $usmcaLowValueStatementDetail  Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     */
    public function __construct(
        public UsmcaLowValueStatementDetail $usmcaLowValueStatementDetail,
    ) {}
}
