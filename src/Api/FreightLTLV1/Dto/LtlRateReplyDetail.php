<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlRateReplyDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'customerMessages' => [CustomerMessage::class],
        'freightTransitLocationDetail' => [FreightTransitLocationDetail::class],
    ];

    /**
     * @param  ?string  $serviceType  Service code associated with this particular rate. <br> For Ground this will be a direct copy of the service specified in the request.  For domestic Express, the service may have been bumped, so it may not match the value specified on the request.  For International Express the service may be bumped and not mapped.Allowed values are FEDEX_FREIGHT_PRIORITY and FEDEX_FREIGHT_ECONOMY
     * @param  ?string  $serviceName  The translated service name associated with service type given. <br> Example: FedEx Freight Economy
     * @param  ?string  $packagingType  Packaging type associated with this particular rate.  For Ground will always be YOUR_PACKAGING.  For domestic Express, the packaging may have been bumped so it may not match the value specified on the request.  For International Express the packaging may be bumped and not mapped.
     * @param  CustomerMessage[]|null  $customerMessages  Messages concerning the ability to provide an accurate delivery commitment on an International commit quote.  These could be messages providing information about why a commitment could not be returned or a successful message such as REQUEST_COMPLETED
     * @param  ?RatedShipmentDetail  $ratedShipmentDetails  This object provides the shipment and package rating data in a rate request reply.
     * @param  FreightTransitLocationDetail[]|null  $freightTransitLocationDetail  Indicates the Freight origin and destination city center information and total distance between origin and destination city centers.
     * @param  ?OperationalDetail  $operationalDetail  Indicate the Operational Details.
     * @param  ?string  $signatureOptionType  Indicates the signature Option for this service. <br> Example: SERVICE_DEFAULT
     * @param  ?ServiceDescription  $serviceDescription  Descriptions for a service.
     * @param  ?BrokerDetail  $brokerDetail  These are Broker Detail for the rate quote.
     * @param  ?CommitDetail  $commit  The delivery commitment details
     */
    public function __construct(
        public readonly ?string $serviceType = null,
        public readonly ?string $serviceName = null,
        public readonly ?string $packagingType = null,
        public readonly ?array $customerMessages = null,
        public readonly ?RatedShipmentDetail $ratedShipmentDetails = null,
        public readonly ?array $freightTransitLocationDetail = null,
        public readonly ?OperationalDetail $operationalDetail = null,
        public readonly ?string $signatureOptionType = null,
        public readonly ?ServiceDescription $serviceDescription = null,
        public readonly ?BrokerDetail $brokerDetail = null,
        public readonly ?CommitDetail $commit = null,
    ) {
    }
}
