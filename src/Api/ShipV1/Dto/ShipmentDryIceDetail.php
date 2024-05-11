<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentDryIceDetail extends Dto
{
    /**
     * @param  mixed[]  $totalWeight  Specify total dry ice weight for the shipment.
     * @param  int  $packageCount  Specifies the package Count for the shipment<br>Example: 10
     * @param  ?ShipmentDryIceProcessingOptionsRequested  $processingOptions  Specify that dry ice information is only applicable at the shipment level. Package level dry ice information would not apply.
     */
    public function __construct(
        public readonly array $totalWeight,
        public readonly int $packageCount,
        public readonly ?ShipmentDryIceProcessingOptionsRequested $processingOptions = null,
    ) {
    }
}
