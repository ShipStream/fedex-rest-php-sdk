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
     * @param  ?AccountNumber  $accountNumber  This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     * @param  ?string  $declaredValueUnits  This is the declared value per unit. Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     * @param  ?Dimensions1  $shipmentDimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The Maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     * @param  ?float  $clientDiscountPercent  This is only used for anonymous rate requests.
     * @param  ?ContactAndAddress  $fedExFreightBillingContactAndAddress  Specify the contact and address details of a location.
     * @param  ?string  $aliasId  Alternate unique identifier assigned to this a line item.
     * @param  ?string  $hazardousMaterialsOfferor  Specifies the hazardous materials offeror.
     * @param  ?Money1  $declaredValuePerUnit  Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     * @param  ?LtlRateParty  $alternateBillingParty  Specify alternate billing party details. <br>Note: These details are required when paymentType selected as THIRD_PARTY.
     */
    public function __construct(
        public readonly string $role,
        public readonly array $lineItem,
        public readonly int $totalHandlingUnits,
        public readonly ?AccountNumber $accountNumber = null,
        public readonly ?string $declaredValueUnits = null,
        public readonly ?Dimensions1 $shipmentDimensions = null,
        public readonly ?float $clientDiscountPercent = null,
        public readonly ?ContactAndAddress $fedExFreightBillingContactAndAddress = null,
        public readonly ?string $aliasId = null,
        public readonly ?string $hazardousMaterialsOfferor = null,
        public readonly ?Money1 $declaredValuePerUnit = null,
        public readonly ?LtlRateParty $alternateBillingParty = null,
    ) {
    }
}
