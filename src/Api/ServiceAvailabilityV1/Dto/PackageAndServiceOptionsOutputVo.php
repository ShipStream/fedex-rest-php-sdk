<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageAndServiceOptionsOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['packageOptions' => [PackageTypeDetail::class], 'alerts' => [Alert::class]];

    /**
     * @param  PackageTypeDetail[]|null  $packageOptions  The available packaging options for the shipment. This also includes the applicable rate types, the weight limit, or any other information related to the shipment. </br>Valid values for the weight limit are:<br>-maxMetricWeightAllowed<br>-maxWeightAllowed<br>-oneRateMaxWeightAllowed<br>-oneRateMaxMetricWeightAllowed
     * @param  ?bool  $oneRate  Indicates if OneRate is applicable to the packaging. Returns the response as True if OneRate is applicable. Otherwise the response is False.
     * @param  mixed[][]|null  $advancedRegulatoryPackages  The information for advanced regulatory packages.
     * @param  mixed[][]|null  $serviceOptions  A list of key and value pairs representing the available service and packaging options.
     * @param  Alert[]|null  $alerts  These are alert details received with the response.
     */
    public function __construct(
        public readonly ?array $packageOptions = null,
        public readonly ?bool $oneRate = null,
        public readonly ?array $advancedRegulatoryPackages = null,
        public readonly ?array $serviceOptions = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
