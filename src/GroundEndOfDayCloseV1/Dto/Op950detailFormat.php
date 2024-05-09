<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GroundEndOfDayCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class Op950detailFormat extends Dto
{
    /**
     * @param  ?Op950detailFormatTopOfPageOffset  $topOfPageOffset  Specifies how far down the page to move the begining of the image; allows for printing on letterhead and pre printed stock.
     * @param  ?string  $imageType  Specify the image format used for a shipping document.
     * @param  ?string  $stockType  Specifies the label stock type.  Lists the correct type of paper for the Freight address label option.Specify valid value PAPER_4_PER_PAGE_PORTRAIT
     * @param  ?string  $locale  this is the language and language locale code for the email<br>Example: en_US, fr_CA, es_MX
     */
    public function __construct(
        public readonly ?Op950detailFormatTopOfPageOffset $topOfPageOffset = null,
        public readonly ?string $imageType = null,
        public readonly ?string $stockType = null,
        public readonly ?string $locale = null,
    ) {
    }
}
