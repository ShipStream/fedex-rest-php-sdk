<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GroundEndOfDayCloseV1\Responses;

use ShipStream\FedEx\GroundEndOfDayCloseV1\Dto\EndOfDayCloseOutputVo;
use ShipStream\FedEx\Response;

final class ShpcResponseVo extends Response
{
    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  ?EndOfDayCloseOutputVo  $output
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?EndOfDayCloseOutputVo $output = null,
    ) {
    }
}
