<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GroundEODCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentPart extends Dto
{
    /**
     * @param  ?int  $documentPartSequenceNumber  The one-origin position of this part within a document.
     * @param  ?string  $image  Graphic or printer commands for this image.
     */
    public function __construct(
        public readonly ?int $documentPartSequenceNumber = null,
        public readonly ?string $image = null,
    ) {
    }
}
