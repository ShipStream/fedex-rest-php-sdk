<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentStorageDetail extends Dto
{
    /**
     * @param  ?string  $type  Indicates the mechanism by which a shipping document will be stored for later retrieval.
     * @param  ?string  $filePath  Provides the path to be used for STORED or DEFERRED documents.
     * @param  ?string  $fileNaming  Identifies the convention by which file names are constructed from STORED or DEFERRED documents.
     * @param  ?string  $fileSuffix  Suffix to be placed at the end of the file name;required on some platforms to determine file type
     */
    public function __construct(
        public ?string $type = null,
        public ?string $filePath = null,
        public ?string $fileNaming = null,
        public ?string $fileSuffix = null,
    ) {}
}