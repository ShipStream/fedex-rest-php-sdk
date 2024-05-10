<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class GeneralAgencyAgreementDetail extends Dto
{
    /**
     * @param  ?ShippingDocumentFormat  $documentFormat  Specify the shipping document format.
     */
    public function __construct(
        public readonly ?ShippingDocumentFormat $documentFormat = null,
    ) {
    }
}
