<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DangerousGoodsDetail extends Dto
{
    /**
     * @param  string  $accessibility  Specify Dangerous Goods Accessibility Type. <ul><li>Inaccessible &ndash; it does not have to be accessable on the aircraft.</li><li>Accessible &ndash; it must be fully accessible on the aircraft, and is more strictly controlled.</li></ul>
     * @param  ?bool  $cargoAircraftOnly  A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. Its default value is set as False.<br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     * @param  ?string[]  $options  These are processing options.
     */
    public function __construct(
        public readonly string $accessibility,
        public readonly ?bool $cargoAircraftOnly = null,
        public readonly ?array $options = null,
    ) {
    }
}
