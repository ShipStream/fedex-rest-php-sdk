<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class PendingShipmentDetail extends Dto
{
    protected static array $complexArrayTypes = ['documentReferences' => [UploadDocumentReferenceDetail::class]];

    /**
     * @param  ?string  $pendingShipmentType  This is Pending Shipment Type. Must include the value EMAIL for email return shipments.<br>Not applicable for other types of shipments.
     * @param  ?PendingShipmentProcessingOptionsRequested  $processingOptions  Use this object to specify the processing options associated with Pending Shipment request. This is useful for the Email Label originator to specify if the completer can make modifications to editable shipment data.
     * @param  ?RecommendedDocumentSpecification  $recommendedDocumentSpecification  These are recommended document specification which are recommended to be included with the shipment.
     * @param  ?EmailLabelDetail  $emailLabelDetail  Describes specific information about the email label shipment.<ul><li>Message: Content of the email message</li><li>Recipients: EMailRecipient</li><li>emailAddress - email address of the recipient</li><li>role - role type of the recipient</li><li>optionsRequested</li><li>localization</li>
     * @param  UploadDocumentReferenceDetail[]|null  $documentReferences  These are Upload document details provided by the initiator of the shipment.
     * @param  ?string  $expirationTimeStamp  Specify the Email Return Label expiration date. The Maximum expiration date for an Email Return Label must be greater or equal to the day of the label request and not greater than 2 years in the future.<br>Example: 2012-12-31.
     * @param  ?ShipmentDryIceDetail  $shipmentDryIceDetail  Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     */
    public function __construct(
        public readonly ?string $pendingShipmentType = null,
        public readonly ?PendingShipmentProcessingOptionsRequested $processingOptions = null,
        public readonly ?RecommendedDocumentSpecification $recommendedDocumentSpecification = null,
        public readonly ?EmailLabelDetail $emailLabelDetail = null,
        public readonly ?array $documentReferences = null,
        public readonly ?string $expirationTimeStamp = null,
        public readonly ?ShipmentDryIceDetail $shipmentDryIceDetail = null,
    ) {
    }
}
