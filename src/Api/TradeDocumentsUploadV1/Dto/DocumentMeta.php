<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class DocumentMeta extends Dto
{
    /**
     * @param  string  $imageType  Specify the type of image to be uploaded.<br><br>Valid Values are: <ul><li>SIGNATURE</li><li>LETTERHEAD</li></ul>
     * @param  string  $imageIndex  Specify the index for the uploaded image.<br><br>Valid Values are:<ul><li>IMAGE_1</li><li>IMAGE_2</li><li>IMAGE_3</li><li>IMAGE_4</li><li>IMAGE_5</li></ul>
     */
    public function __construct(
        public string $imageType,
        public string $imageIndex,
    ) {}
}
