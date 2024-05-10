<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentCodDetail extends Dto
{
    /**
     * @param  string  $codCollectionType  Identifies the type of funds FedEx should collect upon shipment delivery
     * @param  ?CodTransportationChargesDetail  $addTransportationChargesDetail  Use this object to specify C.O.D. transportation charges.
     * @param  ?mixed[]  $codRecipient  Descriptive data of the Cash On Delivery along with their details of the physical location.
     * @param  ?string  $remitToName  Specify the name of the person or company receiving the secured/unsecured funds payment.
     * @param  ?ContactAndAddress  $financialInstitutionContactAndAddress  Specifies the contact and address details of a location.
     * @param  ?mixed[]  $codCollectionAmount  Indicate the COD collection amount.
     * @param  ?string  $returnReferenceIndicatorType  Indicate return reference type information to include on the COD return shipping label.
     * @param  ?mixed[]  $shipmentCodAmount  Indicate the COD amount for this shipment.
     */
    public function __construct(
        public readonly string $codCollectionType,
        public readonly ?CodTransportationChargesDetail $addTransportationChargesDetail = null,
        public readonly ?array $codRecipient = null,
        public readonly ?string $remitToName = null,
        public readonly ?ContactAndAddress $financialInstitutionContactAndAddress = null,
        public readonly ?array $codCollectionAmount = null,
        public readonly ?string $returnReferenceIndicatorType = null,
        public readonly ?array $shipmentCodAmount = null,
    ) {
    }
}
