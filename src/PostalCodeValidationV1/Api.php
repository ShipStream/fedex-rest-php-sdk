<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PostalCodeValidationV1;

use Saloon\Http\Response;
use ShipStream\FedEx\BaseResource;
use ShipStream\FedEx\PostalCodeValidationV1\Dto\FullSchemaValidatePostal;
use ShipStream\FedEx\PostalCodeValidationV1\Requests\ValidatePostal;

class PostalCodeValidationV1 extends BaseResource
{
    /**
     * @param  FullSchemaValidatePostal  $fullSchemaValidatePostal  The request elements for validating a postal code.
     */
    public function validatePostal(FullSchemaValidatePostal $fullSchemaValidatePostal): Response
    {
        return $this->connector->send(new ValidatePostal($fullSchemaValidatePostal));
    }
}
