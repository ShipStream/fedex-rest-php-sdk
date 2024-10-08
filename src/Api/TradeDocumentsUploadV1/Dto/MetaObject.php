<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class MetaObject extends Dto
{
    /**
     * @param  string  $shipDocumentType  Provide the type of document to be uploaded. <br><br>For more information on the individual documents, visit Overview section of <b>Upload Documents</b> on this page.
     * @param  string  $originCountryCode  Provide origin country code for the shipment. <br><br> Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  string  $destinationCountryCode  Provide destination country code for the shipment. <br><br> Example: CA <br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string  $formCode  Specify the form code. This value is required if US/CA/MX trade documents are to be uploaded.<br> Example: USMCA<br><br>Note: if <i>shipDocumentType</i> value provided is either USMCA_CERTIFICATION_OF_ORIGIN or USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN, then it is  REQUIRED to pass value as <i>USMCA</i>.
     * @param  ?string  $trackingNumber  Specify the shipment tracking number. This is only required for Post Shipment document upload. <br><br> Example: 79XXX12XX805
     * @param  ?string  $shipmentDate  Specify the Shipment date. This is only required for Post Shipment document upload. <br><br> Example: 2021-02-17T00:00:00
     * @param  ?string  $originLocationCode  Provide origin FedEx location code for the shipment. <br><br> Example: GVTKK
     * @param  ?string  $destinationLocationCode  Provide destination FedEx location code for the shipment. <br><br> Example: JNUA
     */
    public function __construct(
        public string $shipDocumentType,
        public string $originCountryCode,
        public string $destinationCountryCode,
        public ?string $formCode = null,
        public ?string $trackingNumber = null,
        public ?string $shipmentDate = null,
        public ?string $originLocationCode = null,
        public ?string $destinationLocationCode = null,
    ) {}
}
