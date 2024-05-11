<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CommercialInvoice extends Dto
{
    protected static array $complexArrayTypes = ['customerReferences' => [CustomerReference::class]];

    /**
     * @param  ?string  $originatorName  The originator name that will populate the Commercial Invoice (or Pro Forma).
     * @param  ?string[]  $comments  The comments that will populate the Commercial Invoice (or Pro Forma). Only the comments specified in the first two indexes of the array will be printed on the invoice and other comments would be ignored as the limitation is set for only two indexes. It considers the comment which is in the first index as a Special Instructions, Hence the comment at first index will be printed under special instructions and the other will be printed at comments section in the Commercial Invoice Document. <br>Example: comments
     * @param  CustomerReference[]|null  $customerReferences  These are additional customer reference data for commercial invoice.
     * @param  ?mixed[]  $taxesOrMiscellaneousCharge  Indicate the taxes or miscellaneous charges(other than freight charges or insurance charges) that are associated with the shipment.
     * @param  ?string  $taxesOrMiscellaneousChargeType  Indicate the type of taxes Or miscellaneous charge.
     * @param  ?mixed[]  $freightCharge  Indicate the freight charge.
     * @param  ?mixed[]  $packingCosts  Indicate the packing cost.
     * @param  ?mixed[]  $handlingCosts  Indicate the handling cost.
     * @param  ?string  $declarationStatement  This is the declaration statement which will populate the Commercial Invoice (or Pro Forma).<br>Maximum length is 554.<br>Example: declarationStatement
     * @param  ?string  $termsOfSale  Specify terms Of Sale that will be populated on the Commercial Invoice (or Pro Forma). Maximum length is 3<br>Valid values are:<ul><li>FCA/FOB (Free Carrier/Free On Board): Seller is responsible for all costs of delivering goods to destination. (Default)</li><li>CIP (Costs, Insurance Paid): Seller is responsible for miscellaneous charges to destination.</li><li>CPT (Carriage Paid To): Buyer is responsible for insurance.</li><li>EXW (Ex Works): Seller makes goods available to buyer. Buyer is responsible for delivering goods to destination.</li><li>DDU (Delivered Duty Unpaid): Seller is responsible for delivering goods to destination. Buyer is responsible for clearing goods through Bureau of Customs and Border Protection.</li><li>DDP (Delivered Duty Paid): Seller is responsible for delivering goods to destination, including duties, taxes, and miscellaneous fees.</li><li>DAP (Delivered at Place): Seller pays for carriage to the named place, except for costs related to import clearance, and assumes all risks prior to the point that the goods are ready for unloading by the buyer.</li><li>DPU(Deliver at Place of Unloading)</li></ul>
     * @param  ?string  $specialInstructions  These are special instructions that will be populated on the Commercial Invoice (or Pro Forma).<br>Example: specialInstructions
     * @param  ?string  $shipmentPurpose  This is the reason for the shipment. <br>Note: SOLD is not a valid purpose for a Proforma Invoice.
     * @param  ?ShipEmailDispositionDetail  $emailNotificationDetail  These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     */
    public function __construct(
        public readonly ?string $originatorName = null,
        public readonly ?array $comments = null,
        public readonly ?array $customerReferences = null,
        public readonly ?array $taxesOrMiscellaneousCharge = null,
        public readonly ?string $taxesOrMiscellaneousChargeType = null,
        public readonly ?array $freightCharge = null,
        public readonly ?array $packingCosts = null,
        public readonly ?array $handlingCosts = null,
        public readonly ?string $declarationStatement = null,
        public readonly ?string $termsOfSale = null,
        public readonly ?string $specialInstructions = null,
        public readonly ?string $shipmentPurpose = null,
        public readonly ?ShipEmailDispositionDetail $emailNotificationDetail = null,
    ) {
    }
}
