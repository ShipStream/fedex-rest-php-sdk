<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentCodDetail extends Dto
{
    /**
     * @param  ?CodTransportationChargesDetail  $addTransportationChargesDetail  These are COD Transportation Charges Detail.
     * @param  ?Party2  $codRecipient  Indicate the party to a transaction including the physical address, contact information and account number information.
     * @param  ?string  $remitToName  Specifies the name of person or company receiving the secured or unsecured payment.<br>Example: FedEx
     * @param  ?string  $codCollectionType  Indicate the type of funds FedEx should collect upon shipment delivery.
     * @param  ?ContactAndAddress  $financialInstitutionContactAndAddress  Specify the contact and address details of a location.
     * @param  ?string  $returnReferenceIndicatorType  Indicate the type of reference information to include on the COD return shipping label.
     */
    public function __construct(
        public readonly ?CodTransportationChargesDetail $addTransportationChargesDetail = null,
        public readonly ?Party2 $codRecipient = null,
        public readonly ?string $remitToName = null,
        public readonly ?string $codCollectionType = null,
        public readonly ?ContactAndAddress $financialInstitutionContactAndAddress = null,
        public readonly ?string $returnReferenceIndicatorType = null,
    ) {
    }
}
