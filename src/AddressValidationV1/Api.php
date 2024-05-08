<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AddressValidationV1;

use Saloon\Http\Response;
use ShipStream\FedEx\AddressValidationV1\Dto\FullSchemaValidateAddress;
use ShipStream\FedEx\AddressValidationV1\Requests\Api\ValidateAddress;
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
