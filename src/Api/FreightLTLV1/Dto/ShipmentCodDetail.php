<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentCodDetail extends Dto
{
    /**
     * @param  string  $codCollectionType  Specify the preference type based on funds to be collected by FedEx upon shipment delivery. <br><br> Note: <ul><li>Ground shipments accept only CASH as the COD collection type.</li><li>Express shipments accept ANY and GUARANTEED_FUNDS as the COD collection type.
     * @param  ?CodTransportationChargesDetail  $addTransportationChargesDetail  Use this object to specify C.O.D. transportation charges.
     * @param  ?Party2  $codRecipient  Use this object to provide the attributes such as physical address, contact information and account number information.
     * @param  ?string  $remitToName  Specify the name of the person or company receiving the secured/unsecured funds payment.
     * @param  ?ContactAndAddress  $financialInstitutionContactAndAddress  Specifies the contact and address details of a location.
     * @param  ?Money  $codCollectionAmount  Specifies taxes or miscellaneous charge.
     * @param  ?string  $returnReferenceIndicatorType  Indicate return reference type information to include on the COD return shipping label.
     * @param  ?Money  $shipmentCodAmount  Specifies taxes or miscellaneous charge.
     */
    public function __construct(
        public readonly string $codCollectionType,
        public readonly ?CodTransportationChargesDetail $addTransportationChargesDetail = null,
        public readonly ?Party2 $codRecipient = null,
        public readonly ?string $remitToName = null,
        public readonly ?ContactAndAddress $financialInstitutionContactAndAddress = null,
        public readonly ?Money $codCollectionAmount = null,
        public readonly ?string $returnReferenceIndicatorType = null,
        public readonly ?Money $shipmentCodAmount = null,
    ) {
    }
}
