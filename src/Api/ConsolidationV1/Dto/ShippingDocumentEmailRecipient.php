<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentEmailRecipient extends Dto
{
    /**
     * @param  string  $recipientType  Email Notification Recipient Type
     * @param  ?string  $emailAddress  Provides the email Address<br> Example: email@fedex.com
     */
    public function __construct(
        public string $recipientType,
        public ?string $emailAddress = null,
    ) {}
}
