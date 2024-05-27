<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomerReference extends Dto
{
    /**
     * @param  ?string  $customerReferenceType  This is a customer reference type. The value specified here for the element is printed on the Commercial Invoice only for tracking and label information.<p>Note: <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li><li>The RMA_ASSOCIATION value sent by the customer is returned on the label in human readable form but also as a barcode.</li></ul>Note: INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Customer References</a>
     * @param  ?string  $value  This is a customer reference type value.<br>Example: 3686 <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li><li>The RMA value sent by the customer is returned on the label in human readable form but also as a barcode. RMA_ASSOCIATION only prints on the label as a barcode for a Return shipment.</ul>NOTE:<ul><li> INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.</li><li>  Maximum length varies for value field depending on customerReferenceType.</li></ul> Maximum length for value is as follows: <ul><li>CUSTOMER_REFERENCE - 40(Express), 30(Ground)</li><li>DEPARTMENT_NUMBER - 30</li><li>INVOICE_NUMBER - 30</li><li>P_O_NUMBER - 30</li><li>INTRACOUNTRY_REGULATORY_REFERENCE - 30</li><li>RMA_ASSOCIATION - 20</li>
     */
    public function __construct(
        public readonly ?string $customerReferenceType = null,
        public readonly ?string $value = null,
    ) {
    }
}
