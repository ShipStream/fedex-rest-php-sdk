<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipEmailDispositionDetail extends Dto
{
    /**
     * @param  ?string  $emailAddress  This is email Address.<br>Example: xxxx@xxx.com
     * @param  ?string  $type  Specify the email status.<br>Example: EMAILED
     * @param  ?string  $recipientType  Specify the recipient Type.<br>Example: SHIPPER/BROKER
     */
    public function __construct(
        public readonly ?string $emailAddress = null,
        public readonly ?string $type = null,
        public readonly ?string $recipientType = null,
    ) {
    }
}
