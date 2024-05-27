<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AuthorizationV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\AuthorizationV1\Dto\FullSchema;
use ShipStream\FedEx\Api\AuthorizationV1\Requests\ApiAuthorization;
use ShipStream\FedEx\BaseResource;

class Api extends BaseResource
{
    /**
     * @param  FullSchema  $fullSchema  The request elements for OAuth API.
     */
    public function apiAuthorization(FullSchema $fullSchema): Response
    {
        return $this->connector->send(new ApiAuthorization($fullSchema));
    }
}
