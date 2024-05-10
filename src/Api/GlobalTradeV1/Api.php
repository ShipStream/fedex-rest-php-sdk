<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\GlobalTradeV1\Dto\FullSchema;
use ShipStream\FedEx\Api\GlobalTradeV1\Requests\ShipmentRegulatoryDetails;
use ShipStream\FedEx\BaseResource;

class GlobalTradeV1 extends BaseResource
{
    /**
     * @param  FullSchema  $fullSchema  The request elements to retrieve Shipment Regulatory Details.
     */
    public function shipmentRegulatoryDetails(FullSchema $fullSchema): Response
    {
        return $this->connector->send(new ShipmentRegulatoryDetails($fullSchema));
    }
}
