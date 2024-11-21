<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ConsolidationShipmentsConsolidationRequestedShipmentsCompletedShipmentDetail extends Dto
{
    /**
     * @param  ?bool  $usDomestic  Indicates whether or not this is an intra-U.S. shipment.
     * @param  ?string  $carrierCode  Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     * @param  ?TrackingIds  $masterTrackingId  The field is present to allow use of preassigned Master Airway Bill tracking number.
     * @param  ?ServiceDescription  $serviceDescription  Provides Service Description.
     * @param  ?PackageDescription  $packageDescription  Provides Service Description.
     * @param  ?ShipmentOperationalDetail  $operationalDetail  Shipment level operational information.
     * @param  ?string  $exportComplianceStatement  For shipments requiring an EEI, enter the ITN number received from AES when you filed your shipment or the FTR (Foreign Trade Regulations) exemption number.The proper format for an ITN number is AES XYYYYMMDDNNNNNN where YYYYMMDD is date and NNNNNN are numbers generated by the AES.<br><p>Note: The ITN or FTR exemption number you submit in the Ship request prints on the international shipping label.</p>
     * @param  ?ConsolidationShipmentsConsolidationRequestedShipmentsCompletedShipmentDetailDocumentRequirements  $documentRequirements  Indicates the document requirements detail.
     * @param  ?ConsolidationShipmentsConsolidationRequestedShipmentsCompletedShipmentDetailCompletedPackageDetail  $completedPackageDetail  Indicates the completed package details.
     */
    public function __construct(
        public ?bool $usDomestic = null,
        public ?string $carrierCode = null,
        public ?TrackingIds $masterTrackingId = null,
        public ?ServiceDescription $serviceDescription = null,
        public ?PackageDescription $packageDescription = null,
        public ?ConsolidationShipmentsConsolidationRequestedShipmentsCompletedShipmentDetailSpecialServiceDescription $specialServiceDescription = null,
        public ?ShipmentOperationalDetail $operationalDetail = null,
        public ?ConsolidationShipmentsConsolidationRequestedShipmentsCompletedShipmentDetailConsolidationDetail $consolidationDetail = null,
        public ?string $exportComplianceStatement = null,
        public ?ConsolidationShipmentsConsolidationRequestedShipmentsCompletedShipmentDetailDocumentRequirements $documentRequirements = null,
        public ?ConsolidationShipmentsConsolidationRequestedShipmentsCompletedShipmentDetailCompletedPackageDetail $completedPackageDetail = null,
    ) {}
}