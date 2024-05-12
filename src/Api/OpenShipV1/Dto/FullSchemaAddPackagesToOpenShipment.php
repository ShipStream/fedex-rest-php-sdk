<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaAddPackagesToOpenShipment extends Dto
{
    protected static array $complexArrayTypes = ['requestedPackageLineItems' => [RequestedPackageLineItem::class]];

    /**
     * @param  string  $index  This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     * @param  PartyAccountNumber  $accountNumber  This is FedEx Account number details.
     * @param  RequestedPackageLineItem[]  $requestedPackageLineItems  These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     * @param  ?string  $shipAction  Indicate shipment action for the Shipment. <ul><li>CONFIRM &ndash; used in case of shipment submission</li><li>TRANSFER &ndash; used in case of Email Label Shipment or Pending Shipment submission.
     */
    public function __construct(
        public readonly string $index,
        public readonly PartyAccountNumber $accountNumber,
        public readonly array $requestedPackageLineItems,
        public readonly ?string $shipAction = null,
    ) {
    }
}
