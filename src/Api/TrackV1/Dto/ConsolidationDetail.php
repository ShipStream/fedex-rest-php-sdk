<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ConsolidationDetail extends Dto
{
    protected static array $attributeMap = ['consolidationId' => 'consolidationID'];

    /**
     * @param  ?string  $timeStamp  The timestamp for the consolidation. <br> Example: 2020-10-13T03:54:44-06:00
     * @param  ?string  $consolidationId  The identifier for the consolidation. <br> Example: 47936927
     * @param  ?ReasonDetail  $reasonDetail  This object contains reason description and type.
     * @param  ?int  $packageCount  Specifies the package count for the consolidation. <br> Example: 25
     * @param  ?string  $eventType  Specifies the consolidation event type for a package.  A package can be ADDED to, REMOVED from, or EXCLUDED from a consolidation. <br> Example: PACKAGE_ADDED_TO_CONSOLIDATION
     */
    public function __construct(
        public readonly ?string $timeStamp = null,
        public readonly ?string $consolidationId = null,
        public readonly ?ReasonDetail $reasonDetail = null,
        public readonly ?int $packageCount = null,
        public readonly ?string $eventType = null,
    ) {
    }
}
