<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightBillOfLadingDetail extends Dto
{
    /**
     * @param  ?ShippingDocumentFormat  $format  Specify the shipping document format.
     */
    public function __construct(
        public readonly ?ShippingDocumentFormat $format = null,
    ) {
    }
}
