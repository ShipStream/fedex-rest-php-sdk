<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomsClearanceDetail extends Dto
{
    protected static array $complexArrayTypes = ['commodities' => Commodity::class, 'brokers' => BrokerDetail::class];

    /**
     * @param  ?CustomsOptionDetail  $customsOption  Customs Option Detail, type must be indicated for each occurrence
     * @param  ?ImporterOfRecord  $importerOfRecord  The descriptive information for the person who is responsible for the shipment.
     * @param  ?RecipientCustomsId  $recipientCustomsId  Conditional. Use this element to provide valid identification details. Used for populating brazil tax id.
     * @param  ?Payment  $dutiesPayment  Details about who and how the shipment will be paid for. 'payor' is optional when 'paymentType' provided is SENDER.
     * @param  ?string  $documentContent  Specifies document content.
     * @param  ?Money2  $totalCustomsValue  This is commodity value used for Customs declaration.
     * @param  ?string[]  $regulatoryControls  RegulatoryControls
     * @param  ?Money2  $insuranceCharges  This is commodity value used for Customs declaration.
     * @param  ?ConsolidationCustomsDeclarationStatementDetail  $declarationStatementDetail  This provides the information necessary to identify the different statements,declarations, acts, and/or certifications that apply to this shipment.
     * @param  ?CustomsClearanceDetail1CommercialInvoice  $commercialInvoice  Use this object to provide Commercial Invoice details.<br>This element is required if a FedEx generated Consolidated Commercial Invoice is requested.<br>To request a FedEx generated Consolidated Commercial Invoice include "CONSOLIDATED_COMMERCIAL_INVOICE" value in the "consolidationDocumentTypes" array, in the "consolidationDocumentSpecification" object.<br>Customers are responsible for printing the Consolidated Commercial Invoice.
     * @param  ?ExportDetail  $exportDetail  Conditional. Export Detail Used for US or CA exports.
     * @param  Commodity[]|null  $commodities  Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     * @param  BrokerDetail[]|null  $brokers  Conditional.<br>Specify Broker information only if you are using Broker Select Option for your shipment.To be considered a valid, a country code must be specified in addition to one of the following address items: postal code, city, or location id.
     * @param  ?string  $clearanceBrokerage  Specifies the type of brokerage to be applied to a shipment.
     * @param  ?string  $freightOnValue  Identifies responsibilities with respect to loss, damage, etc.
     */
    public function __construct(
        public ?CustomsOptionDetail $customsOption = null,
        public ?ImporterOfRecord $importerOfRecord = null,
        public ?RecipientCustomsId $recipientCustomsId = null,
        public ?Payment $dutiesPayment = null,
        public ?string $documentContent = null,
        public ?Money2 $totalCustomsValue = null,
        public ?array $regulatoryControls = null,
        public ?Money2 $insuranceCharges = null,
        public ?ConsolidationCustomsDeclarationStatementDetail $declarationStatementDetail = null,
        public ?CustomsClearanceDetail1CommercialInvoice $commercialInvoice = null,
        public ?ExportDetail $exportDetail = null,
        public ?array $commodities = null,
        public ?array $brokers = null,
        public ?string $clearanceBrokerage = null,
        public ?string $freightOnValue = null,
    ) {}
}
