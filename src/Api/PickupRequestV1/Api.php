<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\PickupRequestV1\Dto\FullSchemaCancelPickup;
use ShipStream\FedEx\Api\PickupRequestV1\Dto\FullSchemaCreatePickup;
use ShipStream\FedEx\Api\PickupRequestV1\Dto\FullSchemaPickupAvailability;
use ShipStream\FedEx\Api\PickupRequestV1\Requests\CancelPickup;
use ShipStream\FedEx\Api\PickupRequestV1\Requests\CheckPickupAvailability;
use ShipStream\FedEx\Api\PickupRequestV1\Requests\CreatePickup;
use ShipStream\FedEx\BaseResource;

class PickupRequestV1 extends BaseResource
{
    /**
     * @param  FullSchemaCreatePickup  $fullSchemaCreatePickup  Use this endpoint to create a pickup request.
     */
    public function createPickup(FullSchemaCreatePickup $fullSchemaCreatePickup): Response
    {
        return $this->connector->send(new CreatePickup($fullSchemaCreatePickup));
    }

    /**
     * @param  FullSchemaPickupAvailability  $fullSchemaPickupAvailability  These are pickup availability request elements.
     */
    public function checkPickupAvailability(FullSchemaPickupAvailability $fullSchemaPickupAvailability): Response
    {
        return $this->connector->send(new CheckPickupAvailability($fullSchemaPickupAvailability));
    }

    /**
     * @param  FullSchemaCancelPickup  $fullSchemaCancelPickup  This is a placeholder for cancelled pickup request elements.
     */
    public function cancelPickup(FullSchemaCancelPickup $fullSchemaCancelPickup): Response
    {
        return $this->connector->send(new CancelPickup($fullSchemaCancelPickup));
    }
}
