<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class LabelSpecification extends Dto
{
    /**
     * @param  string  $labelStockType  Indicate the label stock type used. <br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     * @param  string  $imageType  Specify the image format used for a shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     * @param  ?string  $labelFormatType  Specify the label Format Type.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     * @param  ?string  $labelOrder  This is the order of the Shipping label/documents to be generated.
     * @param  ?CustomerSpecifiedLabelDetail  $customerSpecifiedDetail  This object allows the control of label content for customization.
     * @param  ?mixed[]  $printedLabelOrigin  Specify a contact and address instead of the sender address that will be printed on FedEx label. The sender address will be printed if it is not provided. Using this, you can designate a return address that's different from the sender’s. The destination address must be in the same country as the sender.
     * @param  ?string  $labelRotation  This is applicable only to documents produced on thermal printers with roll stock.
     * @param  ?string  $labelPrintingOrientation  This is applicable only to documents produced on thermal printers with roll stock.
     * @param  ?bool  $returnedDispositionDetail  Specify whether or not the return deposition is needed.
     */
    public function __construct(
        public readonly string $labelStockType,
        public readonly string $imageType,
        public readonly ?string $labelFormatType = null,
        public readonly ?string $labelOrder = null,
        public readonly ?CustomerSpecifiedLabelDetail $customerSpecifiedDetail = null,
        public readonly ?array $printedLabelOrigin = null,
        public readonly ?string $labelRotation = null,
        public readonly ?string $labelPrintingOrientation = null,
        public readonly ?bool $returnedDispositionDetail = null,
    ) {
    }
}
