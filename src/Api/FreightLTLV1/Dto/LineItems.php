<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LineItems extends Dto
{
    /**
     * @param  ?TrackingNumberInfo  $trackingNumber  Tracking Information corresponding to a line item such as Tracking number,TrackingQualifier,TrackingCarrier and Tracking number uniqueId.
     * @param  ?string  $service  Specify the type of service.<br>Example: FEDEX_FREIGHT_ECONOMY, FEDEX_FREIGHT_PRIORITY
     * @param  ?float  $sequenceNumber  Specify the sequence number of the package.<br>Example: 1
     * @param  ?float  $totalHandlingUnits  Specify the total handling units.<br>Example: 2
     * @param  ?bool  $justOneMore  Specify the boolean value if one or more.
     * @param  ?string  $description  Specify the description.<br> Example: "data"
     * @param  ?string  $packaging  Specify the packaging being used.
     * @param  ?float  $pieces  Specifies the number.<br>Example: 4
     * @param  ?Weight  $weight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  ?LineItemsDimensions  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     * @param  ?Address2  $destination  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?ShipmentSpecialServicesRequested  $shipmentSpecialServicesRequested  Specifies the shipment special services requested.
     */
    public function __construct(
        public readonly ?TrackingNumberInfo $trackingNumber = null,
        public readonly ?string $service = null,
        public readonly ?float $sequenceNumber = null,
        public readonly ?float $totalHandlingUnits = null,
        public readonly ?bool $justOneMore = null,
        public readonly ?string $description = null,
        public readonly ?string $packaging = null,
        public readonly ?float $pieces = null,
        public readonly ?Weight $weight = null,
        public readonly ?LineItemsDimensions $dimensions = null,
        public readonly ?Address2 $destination = null,
        public readonly ?ShipmentSpecialServicesRequested $shipmentSpecialServicesRequested = null,
    ) {
    }
}
