<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class CommitDetail extends Dto
{
    /**
     * @param  ?string  $brokerCommitTimestamp  The delivery commitment date/time the shipment will arrive at the border. <br>format [YYYY-MM-DDTHH:MM:SS:00Z]
     * @param  ?string  $cutOffTime  Identifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     * @param  ?string  $commodityName  The Commodity applicable to this commitment.
     * @param  ?CommitDetailTransitDays  $transitDays  The number of days the package/shipment is to be in transit. Applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     * @param  ?string  $commitMessageDetails  This is a message concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as 'REQUEST COMPLETED'
     * @param  ?CleansedAddressandLocationDetail  $derivedDestinationDetail  This is the internal FedEx-system recognized address and location details.
     * @param  ?CommitDetailDateDetail  $dateDetail  Specific date and time.
     */
    public function __construct(
        public readonly ?string $brokerCommitTimestamp = null,
        public readonly ?string $cutOffTime = null,
        public readonly ?string $commodityName = null,
        public readonly ?CommitDetailTransitDays $transitDays = null,
        public readonly ?string $commitMessageDetails = null,
        public readonly ?CleansedAddressandLocationDetail $derivedDestinationDetail = null,
        public readonly ?CommitDetailDateDetail $dateDetail = null,
    ) {
    }
}
