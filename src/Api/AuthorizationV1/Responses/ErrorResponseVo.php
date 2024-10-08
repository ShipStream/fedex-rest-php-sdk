<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AuthorizationV1\Responses;

use ShipStream\FedEx\Api\AuthorizationV1\Dto\CxsError;
use ShipStream\FedEx\Response;

final class ErrorResponseVo extends Response
{
    protected static array $complexArrayTypes = ['errors' => CxsError::class];

    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: bc95c0e4-b33e-42a2-80d2-334282b5d37a
     * @param  CxsError[]|null  $errors  Indicates error details when suspicious files, potential exploits and viruses are found while scanning files, directories and user accounts. This includes code, message and error parameters.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?array $errors = null,
    ) {}
}
