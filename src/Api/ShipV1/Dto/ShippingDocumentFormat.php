<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentFormat extends Dto
{
    protected static array $complexArrayTypes = ['dispositions' => [ShippingDocumentDispositionDetail::class]];

    /**
     * @param  ?bool  $provideInstructions  Indicates whether or not to provide the instructions.
     * @param  ?DocumentFormatOptionsRequested  $optionsRequested  Indicate the requested options for document format.
     * @param  ?string  $stockType  Indicate the used label stock type. Note to list the correct type of paper for the freight address label option.
     * @param  ShippingDocumentDispositionDetail[]|null  $dispositions  Specifies how to create, organize, and return the document
     * @param  ?string  $locale  These are locale details.<br>example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     * @param  ?string  $docType  Specify the image format used for a shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     */
    public function __construct(
        public readonly ?bool $provideInstructions = null,
        public readonly ?DocumentFormatOptionsRequested $optionsRequested = null,
        public readonly ?string $stockType = null,
        public readonly ?array $dispositions = null,
        public readonly ?string $locale = null,
        public readonly ?string $docType = null,
    ) {
    }
}
