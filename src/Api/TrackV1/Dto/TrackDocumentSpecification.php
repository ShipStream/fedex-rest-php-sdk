<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackDocumentSpecification extends Dto
{
    /**
     * @param  mixed[]  $trackingNumberInfo
     * @param  ?string  $shipDateBegin  ShipDateBegin and ShipDateEnd are used to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number during a specific date range.<br>Format: YYYY-MM-DD<br>example: '2020-03-29'
     * @param  ?string  $shipDateEnd  ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number during a specific date range.<br>Format: YYYY-MM-DD<br>example: '2020-04-01'
     * @param  ?string  $accountNumber  Specifies Signature Proof of Delivery(SPOD) account number for the shipment being tracked.<br>Conditionally required when documentType is BILL_OF_LADING or FREIGHT_BILLING_DOCUMENT<br>Example: 123456789
     */
    public function __construct(
        public readonly array $trackingNumberInfo,
        public readonly ?string $shipDateBegin = null,
        public readonly ?string $shipDateEnd = null,
        public readonly ?string $accountNumber = null,
    ) {
    }
}
