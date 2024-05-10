<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Responses;

use ShipStream\FedEx\Api\AddressValidationV1\Dto\CxsError;
use ShipStream\FedEx\Response;

final class ErrorResponseVo503 extends Response
{
    protected static array $complexArrayTypes = ['errors' => [CxsError::class]];

    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  CxsError[]|null  $errors  Indicates error alert when suspicious files, potential exploits and viruses found while scanning files, directories and user accounts. This includes code, message and parameters.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?array $errors = null,
    ) {
    }
}
