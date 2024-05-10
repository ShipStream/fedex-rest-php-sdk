<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PendingShipmentDetail extends Dto
{
    protected static array $complexArrayTypes = ['attachedDocuments' => [UploadDocumentReferenceDetail::class]];

    /**
     * @param  string  $pendingShipmentType  This is Pending Shipment Type. Must include the value 'EMAIL' for email return shipments.<br>Not applicable for other types of shipments.
     * @param  EmailLabelDetail  $emailLabelDetail  These are specific information about the pending email label.<br>Required when PendingShipmentType is EMAIL.<br>Not applicable for CreateTag.
     * @param  ?PendingShipmentProcessingOptionsRequested  $processingOptions  Use this object to allow the Email Label shipment originator,  specify if the Email label shipment completer can make modifications to editable shipment data.
     * @param  ?RecommendedDocumentSpecification  $recommendedDocumentSpecification  These are documents that are recommended to be included with the shipment.
     * @param  UploadDocumentReferenceDetail[]|null  $attachedDocuments  Use this object to specify the details regarding already uploded document(s). This object is required if the documents are uploaded Pre-Shipment uploaded documents. It is recommended to provide values for all elements under this object.
     * @param  ?string  $expirationTimeStamp  This is the Email Label expiration date. The maximum expiration date for an Email Return Label must be greater of equal to the day of the label request and not greater than 2 years in the future.<br>Example: 2020-01-01
     */
    public function __construct(
        public readonly string $pendingShipmentType,
        public readonly EmailLabelDetail $emailLabelDetail,
        public readonly ?PendingShipmentProcessingOptionsRequested $processingOptions = null,
        public readonly ?RecommendedDocumentSpecification $recommendedDocumentSpecification = null,
        public readonly ?array $attachedDocuments = null,
        public readonly ?string $expirationTimeStamp = null,
    ) {
    }
}
