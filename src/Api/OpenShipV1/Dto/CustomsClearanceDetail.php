<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomsClearanceDetail extends Dto
{
    protected static array $complexArrayTypes = ['commodities' => Commodity::class, 'brokers' => BrokerDetail::class];

    /**
     * @param  CommercialInvoice  $commercialInvoice  Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
     * @param  Commodity[]  $commodities  Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     * @param  ?string[]  $regulatoryControls  These are the regulatory controls applicable to the shipment.
     * @param  BrokerDetail[]|null  $brokers  Specify broker information. Use this option only if you are using Broker Select Option for your shipment. A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     * @param  ?string  $freightOnValue  Specify the risk owner for the Freight shipment.
     * @param  ?Payment2  $dutiesPayment  This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments
     * @param  ?bool  $isDocumentOnly  Used to specify if a shipment is document shipment or not. Used only for International Express document shipments. Default value is false.
     * @param  ?RecipientCustomsId  $recipientCustomsId  Use this element to provide valid identification details. Used for populating brazil tax id.
     * @param  ?CustomsOptionDetail  $customsOption  These are customs Option Detail, type must be indicated for each occurrence.
     * @param  ?Party  $importerOfRecord  Use this object to provide the attributes such as physical address, contact information and account number information.
     * @param  ?string  $generatedDocumentLocale  This is the locale for generated document.<br>Example: en_US<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     * @param  ?ExportDetail  $exportDetail  These are export Detail used for US or CA exports.
     * @param  ?Money  $totalCustomsValue  Specifies taxes or miscellaneous charge.
     * @param  ?bool  $partiesToTransactionAreRelated  Specify if the transacting parties are related.
     * @param  ?CustomsDeclarationStatementDetail  $declarationStatementDetail  Specifies about the statements to be declared for Customs.
     * @param  ?Money  $insuranceCharge  Specifies taxes or miscellaneous charge.
     */
    public function __construct(
        public CommercialInvoice $commercialInvoice,
        public array $commodities,
        public ?array $regulatoryControls = null,
        public ?array $brokers = null,
        public ?string $freightOnValue = null,
        public ?Payment2 $dutiesPayment = null,
        public ?bool $isDocumentOnly = null,
        public ?RecipientCustomsId $recipientCustomsId = null,
        public ?CustomsOptionDetail $customsOption = null,
        public ?Party $importerOfRecord = null,
        public ?string $generatedDocumentLocale = null,
        public ?ExportDetail $exportDetail = null,
        public ?Money $totalCustomsValue = null,
        public ?bool $partiesToTransactionAreRelated = null,
        public ?CustomsDeclarationStatementDetail $declarationStatementDetail = null,
        public ?Money $insuranceCharge = null,
    ) {}
}
