<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaVerifyShipment;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\ShipV1\Responses\ShpcResponseVoValidate;
use ShipStream\FedEx\Request;

/**
 * ShipmentPackageValidate
 *
 * Use this endpoint to verify the accuracy of a shipment request prior to actually submitting shipment
 * request. This allow businesses that receive shipping orders from end-user/customers to verify the
 * shipment information prior to submitting a create shipment request to FedEx and printing a label. If
 * for any reason the information needs to be edited or changed, it can be done while the end-user is
 * still available to confirm the changes.<br><br>Note:<ul><li>This is shipment level validation hence
 * supports validation for single piece shipment only.</li><li>Shipment validation is supported for all
 * Express and Ground - Domestic as well as international shipments with all applicable special
 * services. </li><li>Shipment validation is supported for SmartPost and not for Freight LTL
 * shipments.</li></ul><br><br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS)
 * mechanism.</i>
 */
class ShipmentPackageValidate extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaVerifyShipment  $fullSchemaVerifyShipment  The request elements required to create a shipment.
     */
    public function __construct(
        public FullSchemaVerifyShipment $fullSchemaVerifyShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/shipments/packages/validate';
    }

    public function createDtoFromResponse(Response $response): ShpcResponseVoValidate|ErrorResponseVo
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoValidate::class,
            400, 401, 403, 404, 500 => ErrorResponseVo::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaVerifyShipment->toArray();
    }
}
