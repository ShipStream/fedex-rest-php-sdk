<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class BrokerDetail extends Dto
{
    /**
     * @param  string  $type  This is Broker Type.
     * @param  ?string  $brokerCommitTimestamp  This is the delivery commitment date/time the shipment will arrive at the border. <br> Example: 2019-07-22
     * @param  ?string  $brokerCommitDayOfWeek  This is the delivery commitment day of the week the shipment will arrive at the border. <br> Example: SUNDAY
     * @param  ?string  $brokerLocationId  This is the FedEx location identifier for the broker. <br> Example: HKAA
     * @param  ?Brokeraddress  $brokerAddress  This is the broker address used for this shipment.
     * @param  ?int  $brokerToDestinationDays  These are number of days it will take for the shipment to make it from broker. <br> Example: 10
     */
    public function __construct(
        public readonly BrokerDetailBroker $broker,
        public readonly string $type,
        public readonly ?string $brokerCommitTimestamp = null,
        public readonly ?string $brokerCommitDayOfWeek = null,
        public readonly ?string $brokerLocationId = null,
        public readonly ?Brokeraddress $brokerAddress = null,
        public readonly ?int $brokerToDestinationDays = null,
    ) {
    }
}
