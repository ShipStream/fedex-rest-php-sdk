<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentEmailRecipient extends Dto
{
    /**
     * @param  string  $recipientType  Specify the email notification recipient type.
     * @param  ?string  $emailAddress  Specifies the email address.<br> Example: email@fedex.com
     */
    public function __construct(
        public readonly string $recipientType,
        public readonly ?string $emailAddress = null,
    ) {
    }
}
