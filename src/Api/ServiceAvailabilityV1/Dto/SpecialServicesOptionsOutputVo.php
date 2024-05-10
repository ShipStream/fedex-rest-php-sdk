<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class SpecialServicesOptionsOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'alerts' => [Alert::class],
        'serviceOptionsList' => [OptionalServices::class],
    ];

    /**
     * @param  Alert[]|null  $alerts  These are alert details received with the response.
     * @param  OptionalServices[]|null  $serviceOptionsList  The list of options applicable when special service option is selected. The options include:<br>-Service types<br>-Signature options</br>-Package Special services list<br>-Return shipment list<br>-Carrier code<br>-Battery option list<br>-Alert list<br>-Shipment special services ist<br>-Cxs alerts
     */
    public function __construct(
        public readonly ?array $alerts = null,
        public readonly ?array $serviceOptionsList = null,
    ) {
    }
}
