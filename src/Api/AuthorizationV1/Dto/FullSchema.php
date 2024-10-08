<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AuthorizationV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchema extends Dto
{
    protected static array $attributeMap = [
        'grantType' => 'grant_type',
        'clientId' => 'client_id',
        'clientSecret' => 'client_secret',
        'childKey' => 'child_Key',
        'childSecret' => 'child_secret',
    ];

    /**
     * @param  string  $grantType  Specify Type of customer requesting the Oauth token.<br>Valid Values: client_credentials, csp_credentials, client_pc_credentials<br>Note:<br>client_credentials - should be used for customers and brand new Compatible Provider customers who are yet to unboard child accounts.<br>csp_credentials - should be used for Compatible Provider customers with existing child accounts.<br>client_pc_credentials – should be used for Proprietary Parent Child customers.
     * @param  string  $clientId  Specify the Client ID also known as API Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     * @param  string  $clientSecret  Specify the Client secret also known as Secret Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     * @param  ?string  $childKey  Specify the Client ID also known as Customer Key. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     * @param  ?string  $childSecret  Specify the Client secret also known as Customer Secret. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     */
    public function __construct(
        public string $grantType,
        public string $clientId,
        public string $clientSecret,
        public ?string $childKey = null,
        public ?string $childSecret = null,
    ) {}
}
