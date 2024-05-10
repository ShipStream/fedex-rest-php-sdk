<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Responses;

use ShipStream\FedEx\Api\TrackV1\Dto\CxsError2;
use ShipStream\FedEx\Response;

final class ErrorResponseVo401 extends Response
{
    protected static array $complexArrayTypes = ['errors' => [CxsError2::class]];

    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  CxsError2[]|null  $errors
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?array $errors = null,
    ) {
    }
}
