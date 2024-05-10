<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationSummaryOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'alerts' => [Alert::class],
        'ambiguousAddress' => [LocationDetail::class],
        'locationCapabilities' => [LocationCapabilities::class],
        'packageMaximumLimits' => [PackageAttribute::class],
    ];

    /**
     * @param  ?int  $totalResults  Indicates the total number of locations that are displayed in the result.<br>Example: 13
     * @param  ?int  $resultsReturned  Specifies the number of results returned in the reply.<br>Example: 10
     * @param  ?mixed[]  $matchedAddress  The address provided in the request.
     * @param  ?mixed[]  $matchedAddressGeoCoord  Identifies the geographic coordinates corresponding to the address specified. It is specified in ISO 6709 format.<br> Example: +40.75-074.00
     * @param  mixed[][]|null  $locationDetailList  List of FedEx locations meeting the search criteria.
     * @param  Alert[]|null  $alerts  Specifies the alerts.
     * @param  ?LocationDetail  $nearestLocation  Details about a specific FedEx location such as services offered, distance, package attributes supported, hours, pickup and drop off times.
     * @param  ?LocationDetail  $latestLocation  Details about a specific FedEx location such as services offered, distance, package attributes supported, hours, pickup and drop off times.
     * @param  LocationDetail[]|null  $ambiguousAddress  Indicates the values for ambiguous address details.
     * @param  ?bool  $ambiguousLocationsReturned  Indicates whether value for ambigous locations were returned or not. <br>Valid values: True, False.
     * @param  ?bool  $nearestLocationReturned  Indicates whether value for nearest locations were returned or not. <br>Valid values: True, False.
     * @param  ?bool  $latestLocationReturned  Indicates whether value for latest locations were returned or not. <br>Valid values: True, False.
     * @param  ?int  $lockerAvailabilityCode  Code for locker availability
     * @param  ?string  $lockerAvailabilityMessage  Message for locker availability
     * @param  ?mixed[]  $location  Based on the locationSearchCriterion value specified, the location element specifies the minimum requirement for address search like postalCode, countryCode, GeoCodes or city.Location phone number is required. Only landline number is allowed.<br><br><i>Note: Country code is REQUIRED for the search.</i>
     * @param  ?string  $phoneNumber  Specify the phone number If the locationSearchCriterion is set to 'PHONE_NUMBER'.The mobile numbers will not return results when set as a criterion. <br> Example: 9015551234
     * @param  ?string  $multipleMatchesAction  Specify the criterion to be used to return location results when there are multiple matches.<br><br><i>Note: The 'maxResults' value takes precedence over RETURN_ALL value.</i>
     * @param  ?Sort  $sort  Specifies how the location search results will be sorted in the reply.
     * @param  ?TrackingInfo  $trackingInfo  Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId. This tracking information helps to return the correct list of locations when REDIRECT_TO_HOLD_AT_LOCATION is requested
     * @param  ?bool  $sameState  Filter to display locations within the same state as the search criteria.<br>Valid values: True, False.
     * @param  ?bool  $sameCountry  Filter to display locations within the same country as the search criteria.<br>Valid values: True, False.
     * @param  ?string  $redirectToHoldType  Specify the type of service supported by a FedEx location for redirect to hold.<br>Valid values: FEDEX_EXPRESS, FEDEX_GROUND, FEDEX_GROUND_HOME_DELIVERY.
     * @param  ?string[]  $locationAttrTypes  Specify attributes to filter location types. If more than one value is specified, only those locations that have all the specified attributes will be returned.<br>Note: In order to filter for DROP_BOX location, need to add locationTypes as FEDEX_SELF_SERVICE_LOCATION
     * @param  LocationCapabilities[]|null  $locationCapabilities  Specify to filter the locations based on their capabilities.
     * @param  PackageAttribute[]|null  $packageMaximumLimits  Any required location supported package constraints to narrow the search.<br>For example, a package weighing more than 151 pounds may not be supported at all location types.  Drop box location would be excluded.
     * @param  ?string[]  $locationTypes  Results filter which narrows the search to specific types of FedEx Locations.
     * @param  ?bool  $includeHoliday  Indicates true if the location holiday list is desired in the results; otherwise false <br>Valid values: True, False.
     * @param  ?string  $dropoffTime  Specifies the latest time by which you can drop-off a package at a location to process the shipment the same day. This limits the results to locations that support a specific drop-off time. The format is an ISO 8601 string in which only the time portion is used.<br>Example: 16:00:00
     * @param  ?string  $dropOffServiceType  The drop-off service types supported by the specified location.<br>Example: FedEx Ground.
     * @param  ?string  $searchBy  location search based on searchBy
     * @param  ?string  $contentOptions  location content options
     * @param  ?string[]  $carrierCodes  Unique code to identify the transporter.
     * @param  ?bool  $getCall  Get a call. Valid values: True, False.
     */
    public function __construct(
        public readonly ?int $totalResults = null,
        public readonly ?int $resultsReturned = null,
        public readonly ?array $matchedAddress = null,
        public readonly ?array $matchedAddressGeoCoord = null,
        public readonly ?array $locationDetailList = null,
        public readonly ?array $alerts = null,
        public readonly ?LocationDetail $nearestLocation = null,
        public readonly ?LocationDetail $latestLocation = null,
        public readonly ?array $ambiguousAddress = null,
        public readonly ?bool $ambiguousLocationsReturned = null,
        public readonly ?bool $nearestLocationReturned = null,
        public readonly ?bool $latestLocationReturned = null,
        public readonly ?int $lockerAvailabilityCode = null,
        public readonly ?string $lockerAvailabilityMessage = null,
        public readonly ?array $location = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $multipleMatchesAction = null,
        public readonly ?Sort $sort = null,
        public readonly ?TrackingInfo $trackingInfo = null,
        public readonly ?bool $sameState = null,
        public readonly ?bool $sameCountry = null,
        public readonly ?string $redirectToHoldType = null,
        public readonly ?array $locationAttrTypes = null,
        public readonly ?array $locationCapabilities = null,
        public readonly ?array $packageMaximumLimits = null,
        public readonly ?array $locationTypes = null,
        public readonly ?bool $includeHoliday = null,
        public readonly ?string $dropoffTime = null,
        public readonly ?string $dropOffServiceType = null,
        public readonly ?string $searchBy = null,
        public readonly ?string $contentOptions = null,
        public readonly ?array $carrierCodes = null,
        public readonly ?bool $getCall = null,
    ) {
    }
}
