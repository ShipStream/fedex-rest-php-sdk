<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class UsmcaCommercialInvoiceCertificationOfOriginDetail extends Dto
{
    protected static array $complexArrayTypes = ['customerImageUsages' => [CustomerImageUsage::class]];

    /**
     * @param  CustomerImageUsage[]|null  $customerImageUsages  Specify the use and identification of supplied images to be used on document.
     * @param  ?ShippingDocumentFormat  $documentFormat  Specify the shipping document format.
     * @param  ?string  $certifierSpecification  This is certifier specification.
     * @param  ?string  $importerSpecification  This is importer specification.
     * @param  ?string  $producerSpecification  This is producer specification.
     * @param  ?Party3  $producer
     * @param  ?string  $certifierJobTitle  Specify the job title of the certifier
     */
    public function __construct(
        public readonly ?array $customerImageUsages = null,
        public readonly ?ShippingDocumentFormat $documentFormat = null,
        public readonly ?string $certifierSpecification = null,
        public readonly ?string $importerSpecification = null,
        public readonly ?string $producerSpecification = null,
        public readonly ?Party3 $producer = null,
        public readonly ?string $certifierJobTitle = null,
    ) {
    }
}
