<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaCancelShipment;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaCancelTag;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaCreateTag;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaGetConfirmedShipmentAsyncResults;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaShip;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaVerifyShipment;
use ShipStream\FedEx\Api\ShipV1\Requests\CancelShipment;
use ShipStream\FedEx\Api\ShipV1\Requests\CancelTag;
use ShipStream\FedEx\Api\ShipV1\Requests\CreateShipment;
use ShipStream\FedEx\Api\ShipV1\Requests\CreateTag;
use ShipStream\FedEx\Api\ShipV1\Requests\GetConfirmedShipmentAsyncResults;
use ShipStream\FedEx\Api\ShipV1\Requests\ShipmentPackageValidate;
use ShipStream\FedEx\BaseResource;

class ShipV1 extends BaseResource
{
    /**
     * @param  FullSchemaShip  $fullSchemaShip  The request elements required to create a shipment.
     */
    public function createShipment(FullSchemaShip $fullSchemaShip): Response
    {
        return $this->connector->send(new CreateShipment($fullSchemaShip));
    }

    /**
     * @param  FullSchemaCancelShipment  $fullSchemaCancelShipment  The request elements required to cancel a shipment.
     */
    public function cancelShipment(FullSchemaCancelShipment $fullSchemaCancelShipment): Response
    {
        return $this->connector->send(new CancelShipment($fullSchemaCancelShipment));
    }

    public function getConfirmedShipmentAsyncResults(
        FullSchemaGetConfirmedShipmentAsyncResults $fullSchemaGetConfirmedShipmentAsyncResults,
    ): Response {
        return $this->connector->send(new GetConfirmedShipmentAsyncResults($fullSchemaGetConfirmedShipmentAsyncResults));
    }

    /**
     * @param  FullSchemaVerifyShipment  $fullSchemaVerifyShipment  The request elements required to create a shipment.
     */
    public function shipmentPackageValidate(FullSchemaVerifyShipment $fullSchemaVerifyShipment): Response
    {
        return $this->connector->send(new ShipmentPackageValidate($fullSchemaVerifyShipment));
    }

    public function createTag(FullSchemaCreateTag $fullSchemaCreateTag): Response
    {
        return $this->connector->send(new CreateTag($fullSchemaCreateTag));
    }

    /**
     * @param  FullSchemaCancelTag  $fullSchemaCancelTag  The input details required to cancel a tag.
     */
    public function cancelTag(string $shipmentid, FullSchemaCancelTag $fullSchemaCancelTag): Response
    {
        return $this->connector->send(new CancelTag($shipmentid, $fullSchemaCancelTag));
    }
}
