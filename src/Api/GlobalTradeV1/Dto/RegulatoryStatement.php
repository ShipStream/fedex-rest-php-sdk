<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryStatement extends Dto
{
    /**
     * @param  ?RegulatoryMessage  $userMessage  Object representing the information needed during the interaction with clients
     * @param  ?string  $supportType  This represents document support type.
     * @param  ?string  $allowability  Specifies a requirement type.
     * @param  ?string  $fileName  This represents file name.
     * @param  ?string  $agencyUrl  Represents agency url.
     * @param  ?string  $documentUrl  Represents document url.
     * @param  ?string  $id  This specifies Regualatory document id.
     * @param  ?string  $completionType  This specifies completion type.
     * @param  ?string  $agencyName  It Specifies agency name.
     * @param  ?LocalizedAttributeDetail  $localizedAttributes  Specifies the localized attribute details.
     * @param  ?string[]  $documentIds  Specifies the document identifier.
     * @param  ?string  $statementUrl  This represents statement url.
     */
    public function __construct(
        public readonly ?RegulatoryMessage $userMessage = null,
        public readonly ?string $supportType = null,
        public readonly ?string $allowability = null,
        public readonly ?string $fileName = null,
        public readonly ?string $agencyUrl = null,
        public readonly ?string $documentUrl = null,
        public readonly ?string $id = null,
        public readonly ?string $completionType = null,
        public readonly ?string $agencyName = null,
        public readonly ?LocalizedAttributeDetail $localizedAttributes = null,
        public readonly ?array $documentIds = null,
        public readonly ?string $statementUrl = null,
    ) {
    }
}
