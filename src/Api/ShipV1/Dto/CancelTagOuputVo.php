<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CancelTagOuputVo extends Dto
{
    /**
     * @param  ?bool  $cancelledTag  Indicates whether the tag has been cancelled or not. If true, then the tag has been successfully cancelled.<br>Example: true
     * @param  ?string  $successMessage  Message received when a tag is successfully cancelled.<br>Example: success
     */
    public function __construct(
        public readonly ?bool $cancelledTag = null,
        public readonly ?string $successMessage = null,
    ) {
    }
}
