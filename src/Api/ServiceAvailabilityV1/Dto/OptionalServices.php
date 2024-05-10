<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class OptionalServices extends Dto
{
    protected static array $complexArrayTypes = [
        'signatureOptionsList' => [CodeDisplayTextVo::class],
        'packageSpecialServicesList' => [PackageSpecialServiceOption::class],
        'batteryOptionList' => [BatteryDetail::class],
        'shipmentSpecialServicesList' => [ShipmentSpecialServiceOption::class],
        'alerts' => [Alert::class],
    ];

    /**
     * @param  ?string  $serviceType  Indicates the type of service that is used to ship the package.<br>Example: INTERNATIONAL_FIRST<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?bool  $issEnabled  Specifies if international signature options are available.
     * @param  CodeDisplayTextVo[]|null  $signatureOptionsList  All possible signature options if signature options are available.  Indicated by the issEnabled boolean.
     * @param  PackageSpecialServiceOption[]|null  $packageSpecialServicesList  Indicates the list of special services that are available at package level for some or all service types.
     * @param  ?string[]  $returnShipmentList
     * @param  ?string  $carrierCode  Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     * @param  BatteryDetail[]|null  $batteryOptionList  Indicates the battery option list.
     * @param  ?string[]  $alertList  Indicates the alert details.
     * @param  ShipmentSpecialServiceOption[]|null  $shipmentSpecialServicesList  Indicates the list of special services that are available at the shipment level for some or all service types.
     * @param  Alert[]|null  $alerts  These are alert details received with the response.
     */
    public function __construct(
        public readonly ?string $serviceType = null,
        public readonly ?bool $issEnabled = null,
        public readonly ?array $signatureOptionsList = null,
        public readonly ?array $packageSpecialServicesList = null,
        public readonly ?array $returnShipmentList = null,
        public readonly ?string $carrierCode = null,
        public readonly ?array $batteryOptionList = null,
        public readonly ?array $alertList = null,
        public readonly ?array $shipmentSpecialServicesList = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
