<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaGetOpenShipmentResults extends Dto
{
    /**
     * @param  string  $resultMethodType  The use of this method is to retrieve the results of the CREATE, MODIFY and CONFIRM events of Asynchronous flow.<br><ul><li>CREATE- Customer will create Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Create OpenShipment.</li><li>MODIFY- Customer will modify Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Modify OpenShipment.</li><li>CONFIRM- Customer will confirm Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Confirm OpenShipment.</li></ul>
     * @param  string  $jobId  Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request.<br> Example: '89sxxxxx233ae24ff31xxxxx'
     * @param  mixed[]  $accountNumber  The account number associated with the shipment. <br>Example: Your account number
     */
    public function __construct(
        public readonly string $resultMethodType,
        public readonly string $jobId,
        public readonly array $accountNumber,
    ) {
    }
}
