<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Op900detail extends Dto
{
    protected static array $complexArrayTypes = ['customerImageUsages' => [CustomerImageUsage::class]];

    /**
     * @param  CustomerImageUsage[]|null  $customerImageUsages  Specify the use and identification of supplied images to be used on document.
     * @param  ?string  $signatureName  Indicates the name to be printed as signature on the document instead of (or in addition to) a signature image.<br>Example: John Hill
     * @param  ?ShippingDocumentFormat  $documentFormat  Specify the shipping document format.
     */
    public function __construct(
        public readonly ?array $customerImageUsages = null,
        public readonly ?string $signatureName = null,
        public readonly ?ShippingDocumentFormat $documentFormat = null,
    ) {
    }
}
