<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class TransactionOpenShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?string  $serviceType  Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     * @param  ?string  $shipDatestamp  This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     * @param  ?string  $serviceCategory  Indicates service category.<br>Example: EXPRESS
     * @param  ?string  $serviceName  Describes the service name for the shipment. <br> Example: FedEx Ground
     * @param  Alert[]|null  $alerts  The alerts details received in the response.
     * @param  ?CompletedShipmentDetail  $completedShipmentDetail  Returns the result of processing the desired package as a single-package shipment.
     * @param  ?ShipmentAdvisoryDetails  $shipmentAdvisoryDetails  These are shipment advisory details.
     * @param  ?string  $masterTrackingNumber  This is a master tracking number for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).<br>Example: 794953535000
     */
    public function __construct(
        public readonly ?string $serviceType = null,
        public readonly ?string $shipDatestamp = null,
        public readonly ?string $serviceCategory = null,
        public readonly ?string $serviceName = null,
        public readonly ?array $alerts = null,
        public readonly ?CompletedShipmentDetail $completedShipmentDetail = null,
        public readonly ?ShipmentAdvisoryDetails $shipmentAdvisoryDetails = null,
        public readonly ?string $masterTrackingNumber = null,
    ) {
    }
}
