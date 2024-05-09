<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GroundEndOfDayCloseV1;

use Saloon\Http\Response;
use ShipStream\FedEx\BaseResource;
use ShipStream\FedEx\GroundEndOfDayCloseV1\Dto\FullSchemaGeodPut;
use ShipStream\FedEx\GroundEndOfDayCloseV1\Dto\FullSchemaReprintPost;
use ShipStream\FedEx\GroundEndOfDayCloseV1\Requests\Api\GroundPerformEndOfDayClose;
use ShipStream\FedEx\GroundEndOfDayCloseV1\Requests\Api\PerformEndOfDayClose;

class Api extends BaseResource
{
    public function groundPerformEndOfDayClose(FullSchemaGeodPut $fullSchemaGeodPut): Response
    {
        return $this->connector->send(new GroundPerformEndOfDayClose($fullSchemaGeodPut));
    }

    public function performEndOfDayClose(FullSchemaReprintPost $fullSchemaReprintPost): Response
    {
        return $this->connector->send(new PerformEndOfDayClose($fullSchemaReprintPost));
    }
}
