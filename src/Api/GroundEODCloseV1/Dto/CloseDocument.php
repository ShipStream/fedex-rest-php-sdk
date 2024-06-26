<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GroundEODCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class CloseDocument extends Dto
{
    protected static array $complexArrayTypes = ['parts' => [ShippingDocumentPart::class]];

    /**
     * @param  ?string  $type  Specifies the type of report.
     * @param  ?string  $shippingCycle  Identifies the shipping cycle covered by the content of this document.
     * @param  ?string  $shippingDocumentDisposition
     * @param  ?string  $accessReference  The name under which a STORED or DEFFERED document is written.
     * @param  ?int  $resolution  Specifies the image resolution in dpi(Dots per inch)
     * @param  ?int  $copiesToPrint  Can be zero for documents whose dispositions no content is included.
     * @param  ShippingDocumentPart[]|null  $parts
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $shippingCycle = null,
        public readonly ?string $shippingDocumentDisposition = null,
        public readonly ?string $accessReference = null,
        public readonly ?int $resolution = null,
        public readonly ?int $copiesToPrint = null,
        public readonly ?array $parts = null,
    ) {
    }
}
