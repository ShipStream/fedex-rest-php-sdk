<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Responses;

use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\CxsError;
use ShipStream\FedEx\Response;

final class ErrorResponseVo4031 extends Response
{
    protected static array $complexArrayTypes = ['errors' => [CxsError::class]];

    /**
     * @param  CxsError[]|null  $errors  This is an error object detailing errors received in the reply.
     */
    public function __construct(
        public readonly ?array $errors = null,
    ) {
    }
}
