<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class RateReplyDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'customerMessages' => [CustomerMessage::class],
        'ratedShipmentDetails' => [RatedShipmentDetail::class],
    ];

    /**
     * @param  ?string  $serviceType  This is the service type associated with this rate (i.e. Priority Overnight, Home Delivery, etc.)<br>For Ground/SmartPost this will be a direct copy of the service specified in the request. For domestic Express, the service may have been bumped, so it may not match the value specified on the request. For International Express the service may be bumped and not mapped.<br>Example: FEDEX_GROUND<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?string  $serviceName  This is the service name associated with this rate. <br> Example: FedEx Ground
     * @param  ?string  $packagingType  This is the Packaging type. For Ground/SmartPost,it  will always be YOUR_PACKAGING. For domestic Express, the packaging may have been bumped so it may not match the value specified on the request. For International Express the packaging may be bumped and not mapped.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     * @param  CustomerMessage[]|null  $customerMessages  These are messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be providing information about why a commitment could not be returned or a successful message<br>Example:<br><ul><li>REQUEST_COMPLETED<br>Request completed successfully</li><li>SERVICE.TYPE.INTERNATIONAL.MESSAGE:<br>Rate does not include duties & taxes, clearance entry fees or other import fees. The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees.</li><li>NATIONAL.HOLIDAY.OBSERVED:<br>National Holiday Observed on Ship Date.</li><li>INCONSISTENT.COMMODITY.DESCRIPTION:<br>The description and harmonized code for the specified commodity are not consistent.</li></ul>
     * @param  RatedShipmentDetail[]|null  $ratedShipmentDetails  This object provides the shipment and package rating data in a rate request reply.
     * @param  ?OperationalDetail  $operationalDetail  Indicate the Operational Details.
     * @param  ?string  $signatureOptionType  Indicates the signature Option for this service. <br> Example: SERVICE_DEFAULT
     * @param  ?ServiceDescription  $serviceDescription  Indicates the provides the Service Description details.
     * @param  ?BrokerDetail  $brokerDetail  These are Broker Detail for the rate quote.
     * @param  ?mixed[]  $commit  Specifies the delivery commitment details date/time.
     * @param  ?ServiceSubOptionDetail  $serviceSubOptionDetail  These are supporting detail for applied options identified in a rate quote.
     */
    public function __construct(
        public readonly ?string $serviceType = null,
        public readonly ?string $serviceName = null,
        public readonly ?string $packagingType = null,
        public readonly ?array $customerMessages = null,
        public readonly ?array $ratedShipmentDetails = null,
        public readonly ?OperationalDetail $operationalDetail = null,
        public readonly ?string $signatureOptionType = null,
        public readonly ?ServiceDescription $serviceDescription = null,
        public readonly ?BrokerDetail $brokerDetail = null,
        public readonly ?array $commit = null,
        public readonly ?ServiceSubOptionDetail $serviceSubOptionDetail = null,
    ) {
    }
}
