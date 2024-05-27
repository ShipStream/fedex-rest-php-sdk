<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\AddressValidationV1\Dto\FullSchemaValidateAddress;
use ShipStream\FedEx\Api\AddressValidationV1\Requests\ValidateAddress;
use ShipStream\FedEx\BaseResource;

class Api extends BaseResource
{
    /**
     * @param  FullSchemaValidateAddress  $fullSchemaValidateAddress  The request elements for address resolution.
     */
    public function validateAddress(FullSchemaValidateAddress $fullSchemaValidateAddress): Response
    {
        return $this->connector->send(new ValidateAddress($fullSchemaValidateAddress));
    }
}
