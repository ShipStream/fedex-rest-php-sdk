<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class DangerousGoodsDetail extends Dto
{
    /**
     * @param  ?string  $accessibility  Specify the Dangerous Goods Accessibility Type. Valid Values: <ul><li>INACCESSIBLE - It does not have to be accessible on the aircraft.</li><li>ACCESSIBLE - It must be fully accessible on the aircraft, and is more strictly controlled.</li></ul>
     * @param  ?string[]  $options  Indicate the kind of content being reported.
     */
    public function __construct(
        public readonly ?string $accessibility = null,
        public readonly ?array $options = null,
    ) {
    }
}
