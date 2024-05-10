<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ScanEvent extends Dto
{
    /**
     * @param  ?string  $date  Date and time of the scan event.<br> Example: '2018-02-02T12:01:00-07:00'
     * @param  ?string  $derivedStatus  Field which holds status description of the track information for the scan event.<br> Example: 'Picked Up'
     * @param  ?mixed[]  $scanLocation  Address information related to the associated Status.
     * @param  ?string  $locationId  Location Identification for facilities identified by an alpha numeric location code. Passing Location Id of the Hold at Location (HAL) address is strongly recommended to ensure packages are delivered to the correct address.<br> Example: SEA
     * @param  ?string  $locationType  This field holds Location Type. If  Location Type not available we will get empty value
     * @param  ?string  $exceptionDescription  Field which holds the text description for the exception if the event was an exception .<br>Example: Package available for clearance
     * @param  ?string  $eventDescription  Field which holds the text description of the scan event.<br> Example: 'Picked Up'
     * @param  ?string  $eventType  Field which holds the code identifying the type of scan event.<br> Example: 'PU'
     * @param  ?string  $derivedStatusCode  Field which holds status code of the track information for the scan event.<br> Example: 'PU'
     * @param  ?string  $exceptionCode  Field which holds the code identifier for the exception if the event was an exception. <br> Example: A25
     * @param  ?DelayDetail  $delayDetail  Specifies the information about delays.
     */
    public function __construct(
        public readonly ?string $date = null,
        public readonly ?string $derivedStatus = null,
        public readonly ?array $scanLocation = null,
        public readonly ?string $locationId = null,
        public readonly ?string $locationType = null,
        public readonly ?string $exceptionDescription = null,
        public readonly ?string $eventDescription = null,
        public readonly ?string $eventType = null,
        public readonly ?string $derivedStatusCode = null,
        public readonly ?string $exceptionCode = null,
        public readonly ?DelayDetail $delayDetail = null,
    ) {
    }
}
