<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightAddressLabelDetail extends Dto
{
    /**
     * @param  ?int  $copies  Indicates the number of copies to be produced for each unique label.<br>Example: 25
     * @param  ?ShippingDocumentFormat  $documentFormat  Specify the shipping document format.
     * @param  ?string  $startingPosition  Specifies the quadrant of the page on which the label printing will start.
     */
    public function __construct(
        public readonly ?int $copies = null,
        public readonly ?ShippingDocumentFormat $documentFormat = null,
        public readonly ?string $startingPosition = null,
    ) {
    }
}
