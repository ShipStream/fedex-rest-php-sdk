<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailLabelDetail extends Dto
{
    protected static array $complexArrayTypes = ['recipients' => [RecipientsParty::class]];

    /**
     * @param  RecipientsParty[]|null  $recipients  Specify recipient information and/ the physical destination location for the package.
     * @param  ?string  $message  This is an optional personalized message to be included in the email to the recipient.
     */
    public function __construct(
        public readonly ?array $recipients = null,
        public readonly ?string $message = null,
    ) {
    }
}
