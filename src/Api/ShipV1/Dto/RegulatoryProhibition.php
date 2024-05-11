<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryProhibition extends Dto
{
    /**
     * @param  ?string  $derivedHarmonizedCode  Indicates the derived harmonized code value<br>Example: 01
     * @param  ?Message  $advisory  Specifies the advisory details.
     * @param  ?int  $commodityIndex  Indicates one based index identifying the associated commodity.<br>Example: 12
     * @param  ?string  $source  Indicates the prohibition source type.<br>Example: source
     * @param  ?string[]  $categories  Indicate the shipment rule type.<br>Example: ["categories"]
     * @param  ?string  $type  Indicates the prohibition type.<br>Example: type
     * @param  ?RegulatoryWaiver  $waiver  Indicates the regulatory waiver.
     * @param  ?string  $status  Indicates the prohibitory status.<br>Example: status
     */
    public function __construct(
        public readonly ?string $derivedHarmonizedCode = null,
        public readonly ?Message $advisory = null,
        public readonly ?int $commodityIndex = null,
        public readonly ?string $source = null,
        public readonly ?array $categories = null,
        public readonly ?string $type = null,
        public readonly ?RegulatoryWaiver $waiver = null,
        public readonly ?string $status = null,
    ) {
    }
}
