<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomerReference extends Dto
{
    /**
     * @param  ?string  $customerReferenceType  This is a customer reference type. Note: Use type as RMA_ASSOCIATION and value as the RMA Number to associate Ground Call Tag shipments to the outbound shipment.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References</a>
     * @param  ?string  $value  This is a customer reference type value.<br>Example: 3686
     */
    public function __construct(
        public readonly ?string $customerReferenceType = null,
        public readonly ?string $value = null,
    ) {
    }
}
