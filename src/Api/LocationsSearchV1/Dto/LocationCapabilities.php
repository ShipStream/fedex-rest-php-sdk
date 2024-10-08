<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationCapabilities extends Dto
{
    /**
     * @param  ?string  $serviceType  Indicates the service types supported by the location.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?string  $carrierCode  Unique code to identify the transporter.
     * @param  ?string  $transferOfPossessionType  The method by which a package is transferred to the possession of a FedEx location.
     * @param  ?string  $serviceCategory  The service category applicable for the capability.
     * @param  ?string[]  $daysOfWeek  The days of the week for which this capability applies.<br>Valid values:<ul><li>MON</li><li>TUE</li><li>WED</li><li>THU</li><li>FRI</li><li>SAT</li><li>SUN</li></ul>
     */
    public function __construct(
        public ?string $serviceType = null,
        public ?string $carrierCode = null,
        public ?string $transferOfPossessionType = null,
        public ?string $serviceCategory = null,
        public ?array $daysOfWeek = null,
    ) {}
}
