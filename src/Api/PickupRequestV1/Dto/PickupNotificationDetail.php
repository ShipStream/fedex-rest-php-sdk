<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class PickupNotificationDetail extends Dto
{
    protected static array $complexArrayTypes = ['emailDetails' => [EmailDetail::class]];

    /**
     * @param  EmailDetail[]|null  $emailDetails  Specify the list of email addresses along with locale to which the pickup confirmation email should be sent.
     * @param  ?string  $format  Specifies the format of email.
     * @param  ?string  $userMessage  Specifies the user message that can be sent as part of the pickup confirmation email.<br>Example: This is the user message
     */
    public function __construct(
        public readonly ?array $emailDetails = null,
        public readonly ?string $format = null,
        public readonly ?string $userMessage = null,
    ) {
    }
}
