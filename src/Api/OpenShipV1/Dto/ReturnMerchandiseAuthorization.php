<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ReturnMerchandiseAuthorization extends Dto
{
    /**
     * @param  ?string  $reason  Specify the reason for the return.<br> Note: There is no validation for reason. Recommended length is 60 alpha-numeric characters<br>Example: Wrong color or size.
     */
    public function __construct(
        public readonly ?string $reason = null,
    ) {
    }
}
