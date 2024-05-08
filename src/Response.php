<?php

declare(strict_types=1);

namespace ShipStream\FedEx;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Traits\Responses\HasResponse;
use ShipStream\FedEx\Contracts\Deserializable;
use ShipStream\FedEx\Traits\Deserializes;

abstract class Response implements Deserializable, WithResponse
{
    use Deserializes;
    use HasResponse;
}
