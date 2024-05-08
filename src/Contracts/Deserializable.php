<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Contracts;

interface Deserializable
{
    public static function deserialize(mixed $data): mixed;
}
