<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaModifyPackageInOpenShipment extends Dto
{
    /**
     * @param  RequestedPackageLineItem  $requestedPackageLineItem  These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     * @param  string  $index  This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     * @param  PartyAccountNumber  $accountNumber  This is FedEx Account number details.
     * @param  TrackingId  $trackingId  Indicates the tracking details for the package.
     * @param  ?string  $shipAction  Indicates the optional actions that can be performed during the modification of packages in  Open Shipment.<p>Here are the values:<ul><li>CREATE_PACKAGE - Use CREATE_PACKAGE option to create Open Shipment.</li><li>STRONG_VALIDATION – Full shipment edits: any edit that fails will cause the transaction to fail. If the transaction is successful, a tracking number may be returned and the transaction will be saved to the database (committed).</li><li>WEAK_VALIDATION - Full shipment edits: any edit that fails will return errors but the transaction does not fail. The tracking number is returned and the transaction is saved in the database if the core edits are passed. Fix errors with the ModifyRequests transaction using the Index and returned tracking number.</li></ul></p>
     */
    public function __construct(
        public readonly RequestedPackageLineItem $requestedPackageLineItem,
        public readonly string $index,
        public readonly PartyAccountNumber $accountNumber,
        public readonly TrackingId $trackingId,
        public readonly ?string $shipAction = null,
    ) {
    }
}
