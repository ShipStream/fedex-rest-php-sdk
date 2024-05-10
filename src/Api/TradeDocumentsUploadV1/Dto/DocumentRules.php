<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class DocumentRules extends Dto
{
    /**
     * @param  string  $workflowName  Specify workflow name. To upload custom signature and letterhead images/company logo use value <i>LetterheadSignature</i>
     */
    public function __construct(
        public readonly string $workflowName,
    ) {
    }
}
