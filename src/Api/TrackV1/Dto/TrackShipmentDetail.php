<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackShipmentDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'contents' => [ShipmentContent::class],
        'weight' => [Weight::class],
        'splitShipments' => [TrackSplitShipment::class],
    ];

    /**
     * @param  ShipmentContent[]|null  $contents  Field which holds information about contents of the shipment. Populated for secure users only.
     * @param  ?bool  $beforePossessionStatus  Indicates the shipment is not yet in FedEx possession, but is still in shipper's possession.<br> Example: false
     * @param  Weight[]|null  $weight  Field which holds the weight of the package.
     * @param  ?string  $contentPieceCount  Field which holds information about content piece count of the shipment.<br> Example: 3333
     * @param  TrackSplitShipment[]|null  $splitShipments  Field which holds information about split shipments.
     */
    public function __construct(
        public readonly ?array $contents = null,
        public readonly ?bool $beforePossessionStatus = null,
        public readonly ?array $weight = null,
        public readonly ?string $contentPieceCount = null,
        public readonly ?array $splitShipments = null,
    ) {
    }
}
