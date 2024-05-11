<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailLabelDetail extends Dto
{
    protected static array $complexArrayTypes = ['recipients' => [RecipientsParty::class]];

    /**
     * @param  RecipientsParty[]|null  $recipients  Indicate the descriptive data for the recipient location to which the shipment is to be received.
     * @param  ?string  $message  This is an optional personalized message to be included in the email to the recipient.
     */
    public function __construct(
        public readonly ?array $recipients = null,
        public readonly ?string $message = null,
    ) {
    }
}
