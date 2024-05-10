<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ServiceDescription2 extends Dto
{
    protected static array $complexArrayTypes = ['names' => [ProductName::class]];

    /**
     * @param  ?string  $serviceType  Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     * @param  ?string  $code  Specifies code of the Service.<br>example: 80
     * @param  ProductName[]|null  $names  Specifies the service name.
     * @param  ?string[]  $operatingOrgCodes  Specifies operating organization codes.<br> Example: 'FXG'
     * @param  ?string  $astraDescription  Specifies astra Description.<br>Example: 2 DAY FRT
     * @param  ?string  $description  Specifies the description.
     * @param  ?string  $serviceId  FOR FEDEX INTERNAL USE ONLY, Designates the service ID.<br>Example: EP1000000027
     * @param  ?string  $serviceCategory  FOR FEDEX INTERNAL USE ONLY. This is tied to the Product EFS interface definition which will currently contain the values of parcel.<br>Example: EXPRESS_PARCEL
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
