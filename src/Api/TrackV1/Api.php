<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaMultiplePieceShipment;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaNotification;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaSpod;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaTcn;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaTrackingNumbers;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaTrackingReferences;
use ShipStream\FedEx\Api\TrackV1\Requests\SendNotification;
use ShipStream\FedEx\Api\TrackV1\Requests\TrackByReferences;
use ShipStream\FedEx\Api\TrackV1\Requests\TrackByTcn;
use ShipStream\FedEx\Api\TrackV1\Requests\TrackByTrackingNumber;
use ShipStream\FedEx\Api\TrackV1\Requests\TrackingDocuments;
use ShipStream\FedEx\Api\TrackV1\Requests\TrackMultiplePieceShipment;
use ShipStream\FedEx\BaseResource;

class Api extends BaseResource
{
    /**
     * @param  FullSchemaMultiplePieceShipment  $fullSchemaMultiplePieceShipment  The request elements for Tracking by associated shipment.
     */
    public function trackMultiplePieceShipment(
        FullSchemaMultiplePieceShipment $fullSchemaMultiplePieceShipment,
    ): Response {
        return $this->connector->send(new TrackMultiplePieceShipment($fullSchemaMultiplePieceShipment));
    }

    /**
     * @param  FullSchemaNotification  $fullSchemaNotification  The request to receive a tracking notification.
     */
    public function sendNotification(FullSchemaNotification $fullSchemaNotification): Response
    {
        return $this->connector->send(new SendNotification($fullSchemaNotification));
    }

    /**
     * @param  FullSchemaTrackingReferences  $fullSchemaTrackingReferences  Specifies the request elements for Track by alternate reference.<br> For a valid request there are two combinations:<br> 1.) A referenceValue and accountNumber is required OR <br>2.) referenceType & carrierCode, shipdateBegin and shipDateEnd, destinationPostalCode and destinationCountryCode are required.
     */
    public function trackByReferences(FullSchemaTrackingReferences $fullSchemaTrackingReferences): Response
    {
        return $this->connector->send(new TrackByReferences($fullSchemaTrackingReferences));
    }

    /**
     * @param  FullSchemaTcn  $fullSchemaTcn  The request elements for Tracking by TCN request type.
     */
    public function trackByTcn(FullSchemaTcn $fullSchemaTcn): Response
    {
        return $this->connector->send(new TrackByTcn($fullSchemaTcn));
    }

    public function trackingDocuments(FullSchemaSpod $fullSchemaSpod): Response
    {
        return $this->connector->send(new TrackingDocuments($fullSchemaSpod));
    }

    /**
     * @param  FullSchemaTrackingNumbers  $fullSchemaTrackingNumbers  The request elements for Tracking by Tracking Number.
     */
    public function trackByTrackingNumber(FullSchemaTrackingNumbers $fullSchemaTrackingNumbers): Response
    {
        return $this->connector->send(new TrackByTrackingNumber($fullSchemaTrackingNumbers));
    }
}
