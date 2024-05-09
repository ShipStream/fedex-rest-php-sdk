<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AuthorizationV1\Responses;

use ShipStream\FedEx\Response as Response1;

final class Response extends Response1
{
    protected static array $attributeMap = [
        'accessToken' => 'access_token',
        'tokenType' => 'token_type',
        'expiresIn' => 'expires_in',
    ];

    /**
     * @param  ?string  $accessToken  This is an encrypted OAuth token used to authenticate your API requests. Use it in the authorization header of your API requests.<br>Example:  eyJhbGciOiJIUzI1NiIsInR5cCI6IkpX……
     * @param  ?string  $tokenType  This is a token type. In this case, it is 'bearer authentication'.
     * @param  ?int  $expiresIn  Indicates the token expiration time in seconds. The standard token expiration time is one hour. <br>Example: 3600
     * @param  ?string  $scope  Indicates the scope of authorization provided to the consumer.<br> Example: CXS
     */
    public function __construct(
        public readonly ?string $accessToken = null,
        public readonly ?string $tokenType = null,
        public readonly ?int $expiresIn = null,
        public readonly ?string $scope = null,
    ) {
    }
}
