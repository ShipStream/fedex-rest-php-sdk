<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PieceResponse extends Dto
{
    protected static array $complexArrayTypes = [
        'transactionDetails' => [TransactionDetailVo::class],
        'packageDocuments' => [LabelResponseVo::class],
        'customerReferences' => [CustomerReference::class],
    ];

    /**
     * @param  ?float  $netChargeAmount  Indicates the net charges amount.<br>Example: 21.45
     * @param  TransactionDetailVo[]|null  $transactionDetails  Indicates data received that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     * @param  LabelResponseVo[]|null  $packageDocuments  These are package documents returned in the response.
     * @param  ?string  $acceptanceTrackingNumber  Indicates the acceptance tracking number.<br>Example: 7949XXXXX5000
     * @param  ?string  $serviceCategory  Indicates the service category.
     * @param  ?string  $listCustomerTotalCharge  Indicates total charges applicable to the customer.<br>Example: listCustomerTotalCharge
     * @param  ?string  $deliveryTimestamp  Indicates delivery date with timestamp.<br>Example: 2012-09-23
     * @param  ?string  $trackingIdType  Indicates the type of the tracking identifier.
     * @param  ?float  $additionalChargesDiscount  These are additional charges or discounts.<br>Example: 621.45
     * @param  ?float  $netListRateAmount  Indicates the net List rate amount.<br>Example: 1.45
     * @param  ?float  $baseRateAmount  Specifies the base rate amount.<br>Example: 321.45
     * @param  ?int  $packageSequenceNumber  Indicates package sequence number.<br>Example: 215
     * @param  ?float  $netDiscountAmount  Specifies the net discount amount.<br>Example: 121.45
     * @param  ?float  $codcollectionAmount  Specifies the Collect on Delivery collection amount.<br>Example: 231.45
     * @param  ?string  $masterTrackingNumber  This is a master tracking number for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).<br>Example: 794XXXXX5000
     * @param  ?string  $acceptanceType  Indicates acceptance type.
     * @param  ?string  $trackingNumber  This is a tracking number associated with this package. <br>Example: 49XXX0000XXX20032835
     * @param  ?bool  $successful  Returns true if the responses are successful otherwise false.
     * @param  CustomerReference[]|null  $customerReferences  These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     */
    public function __construct(
        public readonly ?float $netChargeAmount = null,
        public readonly ?array $transactionDetails = null,
        public readonly ?array $packageDocuments = null,
        public readonly ?string $acceptanceTrackingNumber = null,
        public readonly ?string $serviceCategory = null,
        public readonly ?string $listCustomerTotalCharge = null,
        public readonly ?string $deliveryTimestamp = null,
        public readonly ?string $trackingIdType = null,
        public readonly ?float $additionalChargesDiscount = null,
        public readonly ?float $netListRateAmount = null,
        public readonly ?float $baseRateAmount = null,
        public readonly ?int $packageSequenceNumber = null,
        public readonly ?float $netDiscountAmount = null,
        public readonly ?float $codcollectionAmount = null,
        public readonly ?string $masterTrackingNumber = null,
        public readonly ?string $acceptanceType = null,
        public readonly ?string $trackingNumber = null,
        public readonly ?bool $successful = null,
        public readonly ?array $customerReferences = null,
    ) {
    }
}
