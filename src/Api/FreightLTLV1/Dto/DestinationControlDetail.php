<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class DestinationControlDetail extends Dto
{
    /**
     * @param  string  $statementTypes  Specify appropriate destination control statement type(s), Also make sure to specify destination country and end user.
     * @param  ?string  $endUser  Specify End User name. Its is required if StatementTypes is entered as DEPARTMENT_OF_STATE. <br>Example: John Wick
     * @param  ?string[]  $destinationCountries  Specify DCS shipment destination country. You may enter up to four country codes in this element. Up to 11 alphanumeric characters are allowed.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     */
    public function __construct(
        public readonly string $statementTypes,
        public readonly ?string $endUser = null,
        public readonly ?array $destinationCountries = null,
    ) {
    }
}
