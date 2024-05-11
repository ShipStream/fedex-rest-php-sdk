<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CancelShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?bool  $cancelledShipment  Indicates whether the shipment has been cancelled or not. If the value is True, then it indicates that the shipment has been cancelled.<br>Example: true
     * @param  ?bool  $cancelledHistory  Indicates whether the shipment has been deleted from history or not. If the value is True, then it indicates that the shipment has been deleted.<br>Example: true
     * @param  ?string  $successMessage  The success message generated during cancellation request for Shipment.<br>Example: Success
     * @param  Alert[]|null  $alerts  The alerts received when processing a shipment request.
     */
    public function __construct(
        public readonly ?bool $cancelledShipment = null,
        public readonly ?bool $cancelledHistory = null,
        public readonly ?string $successMessage = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
