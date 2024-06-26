<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentSpecification extends Dto
{
    protected static array $attributeMap = ['op900detail' => 'op900Detail'];

    /**
     * @param  ?GeneralAgencyAgreementDetail  $generalAgencyAgreementDetail  Use this object to specify details to generate general agency agreement detail.
     * @param  ?ReturnInstructionsDetail  $returnInstructionsDetail  These are return instruction details which will be returned in the transaction to be printed on Return Label.
     * @param  ?Op900detail  $op900detail  Use this object to specify details to generate the OP-900 document for hazardous material packages.
     * @param  ?UsmcaCertificationOfOriginDetail  $usmcaCertificationOfOriginDetail  The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     * @param  ?UsmcaCommercialInvoiceCertificationOfOriginDetail  $usmcaCommercialInvoiceCertificationOfOriginDetail  The instructions indicating commercial invoice certification of origin.
     * @param  ?string[]  $shippingDocumentTypes  Indicates the types of shipping documents requested.
     * @param  ?CertificateOfOriginDetail  $certificateOfOrigin  The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
     * @param  ?CommercialInvoiceDetail  $commercialInvoiceDetail  The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     */
    public function __construct(
        public readonly ?GeneralAgencyAgreementDetail $generalAgencyAgreementDetail = null,
        public readonly ?ReturnInstructionsDetail $returnInstructionsDetail = null,
        public readonly ?Op900detail $op900detail = null,
        public readonly ?UsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail = null,
        public readonly ?UsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail = null,
        public readonly ?array $shippingDocumentTypes = null,
        public readonly ?CertificateOfOriginDetail $certificateOfOrigin = null,
        public readonly ?CommercialInvoiceDetail $commercialInvoiceDetail = null,
    ) {
    }
}
