<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class LabelResponseVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?string  $contentKey  This is the content key for the document/label.<br>Example: content key
     * @param  ?int  $copiesToPrint  These are the number of copies to print for the specific document type.<br>Example: 10
     * @param  ?string  $contentType  Indicates the type of document/label.
     * @param  ?string  $trackingNumber  This is a tracking number for the package. <br>Example: 49XXX0000XXX20032835<br>
     * @param  ?string  $docType  This is the document type.<br>Example: PDF
     * @param  Alert[]|null  $alerts  The alerts details received in the response.
     * @param  ?string  $encodedLabel  Specifies if the document is encoded.<br>Example: encoded label
     * @param  ?string  $url  The URL of the shipping document/label<br>Example: https://.../document/v2/document/retrieve/SH,794816968200_Merge/isLabel=true&autoPrint=false<br><br><i>Note: The URL once created will be active for 24 hours.</i>
     */
    public function __construct(
        public readonly ?string $contentKey = null,
        public readonly ?int $copiesToPrint = null,
        public readonly ?string $contentType = null,
        public readonly ?string $trackingNumber = null,
        public readonly ?string $docType = null,
        public readonly ?array $alerts = null,
        public readonly ?string $encodedLabel = null,
        public readonly ?string $url = null,
    ) {
    }
}
