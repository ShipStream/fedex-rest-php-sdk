<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class SmartPostInfoDetail extends Dto
{
    /**
     * @param  string  $hubId  Specify the four-digit numeric Hub ID value used for smartport shipments.<br><a onclick='loadDocReference("smartposthubids")'>click here to see Hub Ids</a>
     * @param  string  $indicia  Specify the indicia type.<br>Available options include:<ul><li>MEDIA_MAIL</li><li>PARCEL_SELECT (1 LB through 70 LB)</li><li>PRESORTED_BOUND_PRINTED_MATTER</li><li>PRESORTED_STANDARD (less than 1 LB)</li><li>PARCEL_RETURN</li></ul>
     * @param  ?string  $ancillaryEndorsement  Indicate the type of ancillary endorsement. Is required for Presorted Standard but not for returns or parcel select. <br>Note: Not all are usable for all ancillary endorsements.<br>For more information, refer to the <a href = 'https://www.fedex.com/en-us/shipping/fedex-smartpost/rates-zones.html' target='_blank'>FedEx SmartPost®</a>.
     * @param  ?string  $specialServices  Specify the special handling associated with Smartpost Shipment.
     */
    public function __construct(
        public readonly string $hubId,
        public readonly string $indicia,
        public readonly ?string $ancillaryEndorsement = null,
        public readonly ?string $specialServices = null,
    ) {
    }
}
