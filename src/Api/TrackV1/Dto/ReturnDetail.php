<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ReturnDetail extends Dto
{
    protected static array $complexArrayTypes = ['reasonDetail' => [ReasonDetail::class]];

    /**
     * @param  ?string  $authorizationName  Name of person authorizing the return, entered by the customer.
     * @param  ReasonDetail[]|null  $reasonDetail  Specifies the return reason details.
     */
    public function __construct(
        public readonly ?string $authorizationName = null,
        public readonly ?array $reasonDetail = null,
    ) {
    }
}
