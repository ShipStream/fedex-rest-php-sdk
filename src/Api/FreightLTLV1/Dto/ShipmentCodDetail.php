<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentCodDetail extends Dto
{
    /**
     * @param  string  $codCollectionType  Specify the preference type based on funds to be collected by FedEx upon shipment delivery. <br><br> Note: <ul><li>Ground shipments accept only CASH as the COD collection type.</li><li>Express shipments accept ANY and GUARANTEED_FUNDS as the COD collection type.
     * @param  ?CodTransportationChargesDetail  $addTransportationChargesDetail  Use this object to specify C.O.D. transportation charges.
     * @param  ?mixed[]  $codRecipient  Descriptive data of the Cash On Delivery along with their details of the physical location.
     * @param  ?string  $remitToName  Specify the name of the person or company receiving the secured/unsecured funds payment.
     * @param  ?ContactAndAddress2  $financialInstitutionContactAndAddress  Specifies the contact and address details of a location.
     * @param  ?mixed[]  $codCollectionAmount  Indicate the COD collection amount.
     * @param  ?string  $returnReferenceIndicatorType  Indicate return reference type information to include on the COD return shipping label.
     * @param  ?mixed[]  $shipmentCodAmount  Indicate the COD amount for this shipment.
     */
    public function __construct(
        public readonly string $codCollectionType,
        public readonly ?CodTransportationChargesDetail $addTransportationChargesDetail = null,
        public readonly ?array $codRecipient = null,
        public readonly ?string $remitToName = null,
        public readonly ?ContactAndAddress2 $financialInstitutionContactAndAddress = null,
        public readonly ?array $codCollectionAmount = null,
        public readonly ?string $returnReferenceIndicatorType = null,
        public readonly ?array $shipmentCodAmount = null,
    ) {
    }
}
