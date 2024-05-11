<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaShip extends Dto
{
    protected static array $attributeMap = ['oneLabelAtAtime' => 'oneLabelAtATime'];

    /**
     * @param  RequestedShipment  $requestedShipment  The descriptive data of the requested shipment.
     * @param  string  $labelResponseOptions  This is to specify whether the encoded bytecode or  the Label URL to be returned in the response.<p>Valid values:<ul><li>LABEL &ndash; Indicates request is for encoded bytecode.</li><li>URL_ONLY &ndash; Indicates label URL request.</li></ul>Note: For asynchronous shipment (More than 40 packages) request only the value LABEL is suported.</p><br><i>Note: With URL_ONLY option, the URL once created will be active for 12 hours.</i>
     * @param  ShipperAccountNumber  $accountNumber  The account number associated with the shipment.
     * @param  ?string  $mergeLabelDocOption  It specifies the content of the merged pdf URL in the response. The merged pdf URL is generated only if the labelResponseOption is indicated as URL_ONLY.<ul><li>If the value is 'LABELS_AND_DOCS', then merged (all shipping labels and shipping documents) pdf URL will be returned.</li><li>If the value is 'LABELS_ONLY', merged (all shipping labels only) pdf URL will be returned.</li><li>If the value is 'NONE', then no merged pdf URL will be returned.</li></ul><br>This is optional field and will default to LABELS_AND_DOCS.<br>Note: If the value is 'LABELS_ONLY', then the returned merged pdf label will not be in the Base64 encoded format.
     * @param  ?string  $shipAction  Indicate shipment action for the Shipment. <ul><li>CONFIRM &ndash; used in case of shipment submission</li><li>TRANSFER &ndash; used in case of Email Label Shipment or Pending Shipment submission.
     * @param  ?string  $processingOptionType  Indicate the processing option for submitting a Single shot MPS shipment. The value indicates if the MPS to be processed synchronously or asynchronously.<br>Note: <ul><li>Default value is SYNCHRONOUS_ONLY.</li><li>Value or element is not needed when groupPackageCount is less than or equal to 40.</li><li>Must provide element with value ALLOW_ASYNCHRONOUS when groupPackageCount is greater than 40.</li></ul>
     * @param  ?bool  $oneLabelAtAtime  This flag is used to specify if the shipment is singleshot mps or one Label at a time, piece by piece shipment. Default is false. If true, one label at a time is processed.
     */
    public function __construct(
        public readonly RequestedShipment $requestedShipment,
        public readonly string $labelResponseOptions,
        public readonly ShipperAccountNumber $accountNumber,
        public readonly ?string $mergeLabelDocOption = null,
        public readonly ?string $shipAction = null,
        public readonly ?string $processingOptionType = null,
        public readonly ?bool $oneLabelAtAtime = null,
    ) {
    }
}
