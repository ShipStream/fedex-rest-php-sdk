<?php

declare(strict_types=1);

namespace ShipStream\FedEx;

use ShipStream\FedEx\Contracts\Deserializable;
use ShipStream\FedEx\Traits\Deserializes;
use ShipStream\FedEx\Traits\HasArrayableAttributes;

class Dto implements Deserializable
{
    use Deserializes;
    use HasArrayableAttributes;
}
