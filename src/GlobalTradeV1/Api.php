<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1;

use Saloon\Http\Response;
use ShipStream\FedEx\BaseResource;
use ShipStream\FedEx\GlobalTradeV1\Dto\FullSchema;
use ShipStream\FedEx\GlobalTradeV1\Requests\Api\ShipmentRegulatoryDetails;

class Api extends BaseResource
{
    /**
     * @param  FullSchema  $fullSchema  The request elements to retrieve Shipment Regulatory Details.
     */
    public function shipmentRegulatoryDetails(FullSchema $fullSchema): Response
    {
        return $this->connector->send(new ShipmentRegulatoryDetails($fullSchema));
    }
}
