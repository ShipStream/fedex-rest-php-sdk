<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ReferenceInfo extends Dto
{
    /**
     * @param  ?string  $regulatoryReferenceNumber  Regulatory Reference Number for the shipment
     * @param  ?string  $yourReference  a customizable reference field for the shipment
     * @param  ?string  $countryCode  CountryCode of the ReferenceInfo
     * @param  ?string  $postalCode  PostalCode of the ReferenceInfo
     * @param  ?string  $purchaseOrderNumber  Purchase Order Number reference for the shipment
     * @param  ?string  $departmentNumber  Department Number reference for the shipment
     * @param  ?string  $invoiceNumber  Invoice Number reference for the shipment
     * @param  ?string  $accountNbr  AccountNbr reference for the shipment
     * @param  ?string  $shipDate  Ship Date for the shipment
     * @param  ?string  $referenceValue  Reference Value attached to the shipment
     */
    public function __construct(
        public readonly ?string $regulatoryReferenceNumber = null,
        public readonly ?string $yourReference = null,
        public readonly ?string $countryCode = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $purchaseOrderNumber = null,
        public readonly ?string $departmentNumber = null,
        public readonly ?string $invoiceNumber = null,
        public readonly ?string $accountNbr = null,
        public readonly ?string $shipDate = null,
        public readonly ?string $referenceValue = null,
    ) {
    }
}
