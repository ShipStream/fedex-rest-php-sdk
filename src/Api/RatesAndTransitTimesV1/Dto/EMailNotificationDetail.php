<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class EMailNotificationDetail extends Dto
{
    protected static array $attributeMap = ['printedReference' => 'PrintedReference'];

    protected static array $complexArrayTypes = ['recipients' => [EmailNotificationRecipient::class]];

    /**
     * @param  EmailNotificationRecipient[]|null  $recipients  The list of recipients for shipment notifications.
     * @param  ?string  $personalMessage  Indicates the personal message to be added with the notification.
     * @param  ?EMailNotificationDetailPrintedReference  $printedReference  Specifies Printed Reference.
     */
    public function __construct(
        public readonly ?array $recipients = null,
        public readonly ?string $personalMessage = null,
        public readonly ?EMailNotificationDetailPrintedReference $printedReference = null,
    ) {
    }
}
