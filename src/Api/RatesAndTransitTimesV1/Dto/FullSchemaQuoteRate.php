<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaQuoteRate extends Dto
{
    /**
     * @param  AccountNumber  $accountNumber  This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     * @param  RequestedShipment  $requestedShipment  This is shipment data for which a rate quote (or rate-shipping comparison) is requested.
     * @param  ?RateRequestControlParameters  $rateRequestControlParameters  Specify the return transit times, services needed on rate failure, choice of variable option and order to sort rate options to filter and sort the expected response.
     * @param  ?string[]  $carrierCodes  Specify the four letter code of a FedEx operating company that meets your requirements.<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     */
    public function __construct(
        public readonly AccountNumber $accountNumber,
        public readonly RequestedShipment $requestedShipment,
        public readonly ?RateRequestControlParameters $rateRequestControlParameters = null,
        public readonly ?array $carrierCodes = null,
    ) {
    }
}
