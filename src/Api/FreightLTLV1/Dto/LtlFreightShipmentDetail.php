<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlFreightShipmentDetail extends Dto
{
    protected static array $attributeMap = ['aliasId' => 'aliasID'];

    protected static array $complexArrayTypes = ['lineItem' => [FreightShipmentLineItem::class]];

    /**
     * @param  string  $role  Indicates the role of the party submitting the transaction.
     * @param  FreightShipmentLineItem[]  $lineItem  Details of the commodities in the shipment.
     * @param  int  $totalHandlingUnits  Total number of individual handling units in the entire shipment (for unit pricing). May not be negative.
     * @param  ?mixed[]  $accountNumber
     *                                   Account number used with FedEx Freight services. Required for account-specific freight rates.
     * @param  ?string  $declaredValueUnits  This is the declared value per unit. Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     * @param  ?string  $shipmentDimensions  Indicates the Shipment Dimensions Value.
     * @param  ?float  $clientDiscountPercent  This is only used for anonymous rate requests.
     * @param  ?string  $fedExFreightBillingContactAndAddress  Indicates the billing address used to validate FedEx Freight account on the bill of lading..
     * @param  ?string  $aliasId  Alternate unique identifier assigned to this a line item.
     * @param  ?string  $hazardousMaterialsOfferor  Specifies the hazardous materials offeror.
     * @param  ?string  $declaredValuePerUnit
     *                                         This is the declared value per unit. Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     * @param  ?LtlRateParty  $alternateBillingParty  Specify alternate billing party details. <br>Note: These details are required when paymentType selected as THIRD_PARTY.
     */
    public function __construct(
        public readonly string $role,
        public readonly array $lineItem,
        public readonly int $totalHandlingUnits,
        public readonly ?array $accountNumber = null,
        public readonly ?string $declaredValueUnits = null,
        public readonly ?string $shipmentDimensions = null,
        public readonly ?float $clientDiscountPercent = null,
        public readonly ?string $fedExFreightBillingContactAndAddress = null,
        public readonly ?string $aliasId = null,
        public readonly ?string $hazardousMaterialsOfferor = null,
        public readonly ?string $declaredValuePerUnit = null,
        public readonly ?LtlRateParty $alternateBillingParty = null,
    ) {
    }
}
