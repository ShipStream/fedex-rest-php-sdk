<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackResult extends Dto
{
    protected static array $complexArrayTypes = [
        'consolidationDetail' => [ConsolidationDetail::class],
        'informationNotes' => [InformationNoteDetail::class],
        'specialHandlings' => [TrackSpecialHandling::class],
        'availableImages' => [AvailableImagesDetail::class],
        'scanEvents' => [ScanEvent::class],
        'dateAndTimes' => [TrackingDateAndTime::class],
        'customDeliveryOptions' => [CustomDeliveryOption::class],
        'pieceCounts' => [PieceCountDetail::class],
    ];

    /**
     * @param  ?TrackingNumberInfo1  $trackingNumberInfo  Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     * @param  ?AdditionalTrackingInfo  $additionalTrackingInfo  Additional Tracking number information like nickname, notes, shipment attributes etc.
     * @param  ?Distance  $distanceToDestination  Distance remaining to the destination. Only returned for FedEx Custom Critical shipments.
     * @param  ConsolidationDetail[]|null  $consolidationDetail  Indicates the consolidation details.
     * @param  ?string  $meterNumber  The associated meter number for your FedEx account number. Maximum of 9 characters. <br> Example: 8468376
     * @param  ?ReturnDetail  $returnDetail  Specifies return information related to a return shipment.
     * @param  ?ServiceDescriptionDetail  $serviceDetail  This object contains service description details for the package.
     * @param  ?mixed[]  $destinationLocation  Location details for the recipient where the package will be or has been delivered.
     * @param  ?StatusDetail  $latestStatusDetail  Specifies details about the status of the track information for the shipment being tracked.  AncilliaryDetails may also be available which describe the cause of exception along with any action that needs to taken by customer.
     * @param  ?ServiceCommitMessage  $serviceCommitMessage  Commitment message for this package. Informative messages related to the package. Used to convey information such as FedEx has received information about a package but has not yet taken possession of it. FedEx has handed the package off to a third party for final delivery. The package delivery has been cancelled.
     * @param  InformationNoteDetail[]|null  $informationNotes  Notifications to the end user that provide additional information relevant to the tracked shipment. For example, a notification may indicate that a change in behavior has occurred.
     * @param  ?CxsError  $error  Contains error details.
     * @param  TrackSpecialHandling[]|null  $specialHandlings  Indicate the special handlings on the package being tracked. Includes Special handlings requested for the package like signature options, Broker select or COD etc.<br><a onclick='loadDocReference("fedexexpressspecialhandlingcodes")'>Click here to see FedEx Express Special Handling Codes.</a>
     * @param  AvailableImagesDetail[]|null  $availableImages  The available tracking documents for the shipment being tracked. Available tracking documents includes SPOD and Bill of lading.
     * @param  ?DeliveryDetails  $deliveryDetails  Delivery related information for the tracked package. Provides delivery details as actual delivery address once the package is delivered, the number of delivery attempts made etc.
     * @param  ScanEvent[]|null  $scanEvents  FedEx scan event information for a shipment. Includes the list of events and/or scans applied.
     * @param  TrackingDateAndTime[]|null  $dateAndTimes  Date and time information for the tracked shipment. Date and time information for the tracked shipment includes various type of date time including when the package was shipped, when it is expected to deliver, when it is actually delivered etc.
     * @param  ?PackageDetail  $packageDetails  Details of the packages in the shipment being tracked. Includes details like package type, weight, dimensions, declared value, etc.
     * @param  ?string  $goodsClassificationCode  Classification codes for the goods in package. Goods classification codes required for clearance purpose. <br> Example: goodsClassificationCode
     * @param  ?mixed[]  $holdAtLocation  Location details for the FedEx facility holding package for delivery. Populated only when REDIRECT_TO_HOLD_AT_LOCATION is available as custom delivery options.
     * @param  CustomDeliveryOption[]|null  $customDeliveryOptions  List of delivery options that can be used to customize the delivery of the package.
     * @param  ?mixed[]  $estimatedDeliveryTimeWindow  The estimated window for time of delivery.  May be periodically updated based on available in-flight shipment information.
     * @param  PieceCountDetail[]|null  $pieceCounts  Piece count information at origin and destination.
     * @param  ?mixed[]  $originLocation  Location details for the FedEx facility where the shipment originated.
     * @param  ?mixed[]  $recipientInformation  Contact and address information of recipient.
     * @param  ?mixed[]  $standardTransitTimeWindow  The standard committed window of time by which the package is expected to be delivered.
     * @param  ?TrackShipmentDetail  $shipmentDetails  Shipment level details for the shipment being tracked. Includes overall shipment weight, contents etc.
     * @param  ?ReasonDetail  $reasonDetail  This object contains reason description and type.
     * @param  ?string[]  $availableNotifications  The types of email notifications that are available for the package. <br> Example:ON_DELIVERY
     * @param  ?mixed[]  $shipperInformation  Contact and address information of shipper.
     * @param  ?mixed[]  $lastUpdatedDestinationAddress  Last updated delivery address for the package.
     */
    public function __construct(
        public readonly ?TrackingNumberInfo1 $trackingNumberInfo = null,
        public readonly ?AdditionalTrackingInfo $additionalTrackingInfo = null,
        public readonly ?Distance $distanceToDestination = null,
        public readonly ?array $consolidationDetail = null,
        public readonly ?string $meterNumber = null,
        public readonly ?ReturnDetail $returnDetail = null,
        public readonly ?ServiceDescriptionDetail $serviceDetail = null,
        public readonly ?array $destinationLocation = null,
        public readonly ?StatusDetail $latestStatusDetail = null,
        public readonly ?ServiceCommitMessage $serviceCommitMessage = null,
        public readonly ?array $informationNotes = null,
        public readonly ?CxsError $error = null,
        public readonly ?array $specialHandlings = null,
        public readonly ?array $availableImages = null,
        public readonly ?DeliveryDetails $deliveryDetails = null,
        public readonly ?array $scanEvents = null,
        public readonly ?array $dateAndTimes = null,
        public readonly ?PackageDetail $packageDetails = null,
        public readonly ?string $goodsClassificationCode = null,
        public readonly ?array $holdAtLocation = null,
        public readonly ?array $customDeliveryOptions = null,
        public readonly ?array $estimatedDeliveryTimeWindow = null,
        public readonly ?array $pieceCounts = null,
        public readonly ?array $originLocation = null,
        public readonly ?array $recipientInformation = null,
        public readonly ?array $standardTransitTimeWindow = null,
        public readonly ?TrackShipmentDetail $shipmentDetails = null,
        public readonly ?ReasonDetail $reasonDetail = null,
        public readonly ?array $availableNotifications = null,
        public readonly ?array $shipperInformation = null,
        public readonly ?array $lastUpdatedDestinationAddress = null,
    ) {
    }
}
