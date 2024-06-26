<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GroundEODCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class EndOfDayCloseOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class], 'closeDocuments' => [CloseDocument::class]];

    /**
     * @param  Alert[]|null  $alerts
     * @param  CloseDocument[]|null  $closeDocuments  The actual document contents for all provided reports.
     */
    public function __construct(
        public readonly ?array $alerts = null,
        public readonly ?array $closeDocuments = null,
    ) {
    }
}
