<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class MessageParameter extends Dto
{
    /**
     * @param  ?string  $id  Specifies the message parameter code.<br>Example: message ID
     * @param  ?string  $value  Specifies the message parameter value of the code.<br>Example: value
     */
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $value = null,
    ) {
    }
}
