<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\LocationsSearchV1\Dto\FullSchemaFindLocation;
use ShipStream\FedEx\Api\LocationsSearchV1\Requests\FindLocation;
use ShipStream\FedEx\BaseResource;

class LocationsSearchV1 extends BaseResource
{
    public function findLocation(FullSchemaFindLocation $fullSchemaFindLocation): Response
    {
        return $this->connector->send(new FindLocation($fullSchemaFindLocation));
    }
}
