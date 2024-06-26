<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ServiceDescription extends Dto
{
    protected static array $complexArrayTypes = ['names' => [ProductName::class]];

    /**
     * @param  ?string  $serviceType  This is the service type.<br>Example: INTERNATIONAL_FIRST<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?string  $code  Specifies the service code.<br> Example: 92
     * @param  ProductName[]|null  $names  Specifies the service name.
     * @param  ?string[]  $operatingOrgCodes  Specifies operating organization codes.<br> Example: 'FXG'
     * @param  ?string  $astraDescription  Specifies astra description. <br> Example: INTL1ST
     * @param  ?string  $description  Specifies description of the service. <br> Example: FedEx Ground
     * @param  ?string  $serviceId  Specifies the service Id. <br> Example: EP1000000135
     * @param  ?string  $serviceCategory  Specifies service category. <br> Example: parcel
     */
    public function __construct(
        public readonly ?string $serviceType = null,
        public readonly ?string $code = null,
        public readonly ?array $names = null,
        public readonly ?array $operatingOrgCodes = null,
        public readonly ?string $astraDescription = null,
        public readonly ?string $description = null,
        public readonly ?string $serviceId = null,
        public readonly ?string $serviceCategory = null,
    ) {
    }
}
