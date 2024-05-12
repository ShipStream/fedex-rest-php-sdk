<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentDryIceDetail extends Dto
{
    /**
     * @param  Weight2  $totalWeight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  int  $packageCount  Specifies the package Count for the shipment<br>Example: 10
     * @param  ?ShipmentDryIceProcessingOptionsRequested  $processingOptions  Specify that dry ice information is only applicable at the shipment level. Package level dry ice information would not apply.
     */
    public function __construct(
        public readonly Weight2 $totalWeight,
        public readonly int $packageCount,
        public readonly ?ShipmentDryIceProcessingOptionsRequested $processingOptions = null,
    ) {
    }
}
