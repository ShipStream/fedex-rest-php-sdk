<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class DocumentUploadServiceOutputVo extends Dto
{
    /**
     * @param  ?DocumentMetaOutput  $meta  This is the response indicating upload reference details.
     */
    public function __construct(
        public ?DocumentMetaOutput $meta = null,
    ) {}
}
