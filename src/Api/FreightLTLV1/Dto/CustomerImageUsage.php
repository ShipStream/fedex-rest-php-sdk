<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomerImageUsage extends Dto
{
    /**
     * @param  ?string  $id  Specify the Image ID.
     * @param  ?string  $type  Specify document image type.
     * @param  ?string  $providedImageType  Specify the provided document image type.
     */
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $type = null,
        public readonly ?string $providedImageType = null,
    ) {
    }
}
