<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GroundEndOfDayCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class CloseDocumentSpecification extends Dto
{
    protected static array $attributeMap = ['op950detail' => 'op950Detail'];

    /**
     * @param  ?string[]  $closeDocumentTypes  Indicated the type of close documents requested by the caller. <br> Example: OP_950
     * @param  ?Op950detail  $op950detail
     */
    public function __construct(
        public readonly ?array $closeDocumentTypes = null,
        public readonly ?Op950detail $op950detail = null,
    ) {
    }
}
