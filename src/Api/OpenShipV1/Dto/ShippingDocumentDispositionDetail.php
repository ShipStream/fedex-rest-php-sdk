<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentDispositionDetail extends Dto
{
    /**
     * @param  ?ShippingDocumentEmailDetail  $eMailDetail  Specifies how to e-mail shipping documents.
     * @param  ?string  $dispositionType  Specify how to create and return the document.
     */
    public function __construct(
        public readonly ?ShippingDocumentEmailDetail $eMailDetail = null,
        public readonly ?string $dispositionType = null,
    ) {
    }
}
