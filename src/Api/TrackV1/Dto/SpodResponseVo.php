<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class SpodResponseVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?Localization  $localization  Specifies the language details for email notification.
     * @param  ?string  $documentType  The types of tracking document.<br> Example: SIGNATURE_PROOF_OF_DELIVERY
     * @param  ?string  $documentFormat  The format of the tracking document. <br>Valid values are PDF and PNG.
     * @param  ?string[]  $document  This field holds the list of byte array(base64) which specifies the image of the recipient's signature (if the signature is available) once the shipment has been delivered. <br>Example: [iVBORw0KGgoAAAANSUhEUgAABX0AAAfECAIAAACJ1ysDAACAAElEQVR42uzdeXxM9/4/8EhC3ZZkskmotlpuq6227r1ur6KqrSXLZLHvhKyIndJy7ZLMlgiy2BJ71E4QewmCICUqJAiCIIgkM3P2M/P7nDkxHQm97b0339b9vZ6P92MeM3P2kX8+L5/FzgQAAAAAAAAAUDvs8BMAAAAAAAAAQC1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQO/6bl0/+dhCEfLh7eOonUsE8S5RouFfly8YD34od8lKAK23ruUKGhXO7v8CtzB1Mt5A6FP+cOLuRxrLmDLtBD1d9rtmWcxRf6Yba5g6MlenAwRdTlo5zoyU2N0/5snPYe9d179Hfvst+1YL9rznwrFT2pKf1tCyqlN3V8BVOcKxjLkDsAAAAAAAAgd4B/J3dQukiv/d5eGPH3ZdMCNySO27du/vH10cdXzzm6ek6Wba345+HUWT/sXZ17K/8uYzSIAmey5A6m58cKctwgWsry/tmbeXGL+l+nFKKcOwyTcodeTeOUUu6gepo7aAM9YmrmDqawuqYw6VUMqy+MUHD//J]
     * @param  Alert[]|null  $alerts  The cxs alert type, alert code, and alert messages.<br>Example: example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     */
    public function __construct(
        public readonly ?Localization $localization = null,
        public readonly ?string $documentType = null,
        public readonly ?string $documentFormat = null,
        public readonly ?array $document = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
