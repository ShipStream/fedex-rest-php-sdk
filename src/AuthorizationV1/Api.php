<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AuthorizationV1;

use Saloon\Http\Response;
use ShipStream\FedEx\AuthorizationV1\Dto\FullSchema;
use ShipStream\FedEx\AuthorizationV1\Requests\Api\ApiAuthorization;
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
