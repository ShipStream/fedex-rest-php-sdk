<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CommitDetail1 extends Dto
{
    /**
     * @param  ?string  $daysInTransit  Code indicating the number of transit days.
     * @param  ?string  $guaranteedType  Indicates if there is a guaranteed delivery option applied to the rate.  This is for freight rates only.<br> Valid values<br>GUARANTEED_MORNING - guaranteed delivery on morning of date specified.<br>GUARANTEED_CLOSE_OF_BUSINESS - guaranteed delivery on date specified by close of day
     * @param  ?DateDetail  $dateDetail  These are date and time details.
     * @param  ?bool  $saturdayDelivery  Specifies the saturdayDelivery.
     * @param  ?string[]  $alternativeCommodityNames  Specifies the alternate names of commodities.
     * @param  ?TransitDays  $transitDays  These are number of days the package/shipment is to be in transit. Applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     * @param  ?string  $label  This is an informational message to inform client Deliverydate is unavailable. If commitTimestamp and transitTime are unavailable, then this is populated in the response in the client language.
     * @param  ?string  $commitMessageDetails  Messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message.
     * @param  ?string  $commodityName  The Commodity applicable to this commitment.
     */
    public function __construct(
        public readonly ?string $daysInTransit = null,
        public readonly ?string $guaranteedType = null,
        public readonly ?DateDetail $dateDetail = null,
        public readonly ?bool $saturdayDelivery = null,
        public readonly ?array $alternativeCommodityNames = null,
        public readonly ?TransitDays $transitDays = null,
        public readonly ?string $label = null,
        public readonly ?string $commitMessageDetails = null,
        public readonly ?string $commodityName = null,
    ) {
    }
}
