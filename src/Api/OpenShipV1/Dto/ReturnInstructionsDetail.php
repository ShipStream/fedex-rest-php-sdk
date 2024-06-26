<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ReturnInstructionsDetail extends Dto
{
    /**
     * @param  ?string  $customText  Specify additional information (text) to be inserted into the return document.<br>Example: This is additional text printed on Return Label
     * @param  ?ReturnShippingDocumentFormat  $documentFormat  These are characteristics of a shipping document to be produced.
     */
    public function __construct(
        public readonly ?string $customText = null,
        public readonly ?ReturnShippingDocumentFormat $documentFormat = null,
    ) {
    }
}
