<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomsClearanceDetailVo extends Dto
{
    protected static array $complexArrayTypes = ['commodities' => [CommodityVo::class]];

    /**
     * @param  Money  $customsValue  Specify Insurance charges if applicable.<br><i>Note: FedEx does not provide insurance of any kind</i>.
     * @param  CommodityVo[]  $commodities
     * @param  ?string[]  $regulatoryControls  These are the Regulatory Controls applicable to the shipment.
     * @param  ?Money  $insuranceCharges  Specify Insurance charges if applicable.<br><i>Note: FedEx does not provide insurance of any kind</i>.
     * @param  ?Party  $importerOfRecordAccountNumber  Attributes for a Party to a transaction including the physical address, contact information and account number information.
     * @param  ?CommercialInvoice  $commercialInvoice  Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     * @param  ?string  $documentContent  Defaults to COMMODITY. Only used for int'l Express requests to indicate if just documents are being shipped or not.
     */
    public function __construct(
        public readonly Money $customsValue,
        public readonly array $commodities,
        public readonly ?array $regulatoryControls = null,
        public readonly ?Money $insuranceCharges = null,
        public readonly ?Party $importerOfRecordAccountNumber = null,
        public readonly ?CommercialInvoice $commercialInvoice = null,
        public readonly ?string $documentContent = null,
    ) {
    }
}
