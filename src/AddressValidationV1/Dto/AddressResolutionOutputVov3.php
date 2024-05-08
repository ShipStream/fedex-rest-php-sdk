<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class AddressResolutionOutputVov3 extends Dto
{
    protected static array $complexArrayTypes = [
        'resolvedAddresses' => [ResolvedAddress::class],
        'alerts' => [Alert::class],
    ];

    /**
     * @param  ResolvedAddress[]|null  $resolvedAddresses  Indicates the list of resolved addresses. The detailed resolved address includes city, state, postal information, and resolution method.
     * @param  Alert[]|null  $alerts  Indicates API Alerts includes alert type, alert code, and alert message that is received when the address is resolved.
     */
    public function __construct(
        public readonly ?array $resolvedAddresses = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
