<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CommercialInvoiceDetail extends Dto
{
    protected static array $complexArrayTypes = ['customerImageUsages' => [CustomerImageUsage::class]];

    /**
     * @param  CustomerImageUsage[]|null  $customerImageUsages  Specify the use and identification of supplied images to be used on document.
     * @param  ?ShippingDocumentFormat  $documentFormat  Specify the shipping document format.
     */
    public function __construct(
        public readonly ?array $customerImageUsages = null,
        public readonly ?ShippingDocumentFormat $documentFormat = null,
    ) {
    }
}
