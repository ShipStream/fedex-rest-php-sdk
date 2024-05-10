<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaFindLocation extends Dto
{
    protected static array $complexArrayTypes = [
        'locationCapabilities' => [LocationCapabilities::class],
        'packageAttributes' => [PackageAttribute::class],
    ];

    /**
     * @param  mixed[]  $location  Based on the locationSearchCriterion value specified, the location element specifies the minimum requirement for address search like postalCode, countryCode, GeoCodes or city.Location phone number is required. Only landline number is allowed.<br><br><i>Note: Country code is REQUIRED for the search.</i>
     * @param  ?mixed[]  $locationsSummaryRequestControlParameters  Use this object to specify all the inputs to get the locations details.
     * @param  ?mixed[]  $constraints  Specify the constraints to be applied to the location attributes.
     * @param  ?string  $locationSearchCriterion  Specify the criteria to be used to search for FedEx locations. Default value is ADDRESS if no value is passed.<p>Valid values: <ul><li>ADDRESS &ndash; Search by address. Location detail data is required.</li><li>GEOGRAPHIC_COORDINATES &ndash; Search by geocodes. Location geocodes are required.</li><li>PHONE_NUMBER &ndash; Search by phone number. Location Phone number is required.</li></ul></p><p><i>Note: Country code is REQUIRED when searching by any of the LocationsSearchCriterion, even PhoneNumber and GeorgraphicCoordinates.</i></p>
     * @param  ?string  $phoneNumber  Specify the phone number(Only LandLine allowed) if the locationSearchCriterion is set to 'PHONE_NUMBER'.Given that is the case, the location search will be made based on the phone number value and the location object(postalCode&countryCode) will be completely ignored. <br> Example: 9015551234
     * @param  ?string  $multipleMatchesAction  Specify the criterion to be used to return location results when there are multiple matches.<br>Valid values: RETURN_ALL,RETURN_ERROR, RETURN_FIRST.<br><br><i>Note: The 'maxResults' value takes precedence over RETURN_ALL value.</i>
     * @param  ?Sort  $sort  Specifies how the location search results will be sorted in the reply.
     * @param  ?TrackingInfo  $trackingInfo  Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId. This tracking information helps to return the correct list of locations when REDIRECT_TO_HOLD_AT_LOCATION is requested
     * @param  ?bool  $sameState  Filter to display locations within the same state as the search criteria.<br>Valid values: True, False.
     * @param  ?bool  $sameCountry  Filter to display locations within the same country as the search criteria.<br>Valid values: True, False.
     * @param  ?string  $redirectToHoldType  Specify the type of service supported by a FedEx location for redirect to hold.
     * @param  ?string[]  $locationAttrTypes  Specify attributes to filter location types. If more than one value is specified, only those locations that have all the specified attributes will be returned.<br>Note: In order to filter for DROP_BOX location, need to add locationTypes as FEDEX_SELF_SERVICE_LOCATION
     * @param  LocationCapabilities[]|null  $locationCapabilities  Specify to filter the locations based on their capabilities.
     * @param  PackageAttribute[]|null  $packageAttributes  Specify location supported package constraints to narrow the search.<br><br>For example, a package weighing more than 151 pounds may not be supported at all location types. Drop box location would be excluded.<p><i>Note: The package attributes inputs are only recognized/supported for FedEx OnSite Locations.</i></p>
     * @param  ?string[]  $locationTypes  Results filter which narrows the search to specific types of FedEx Locations.
     * @param  ?bool  $includeHoliday  Indicates true if the location holiday list is desired in the results; otherwise false <br> Valid values: True, False.
     * @param  ?string  $dropoffTime  Specifies the latest time by which you can drop-off a package at a location to process the shipment the same day. This limits the results to locations that support a specific drop-off time. The format is an ISO 8601 string in which only the time portion is used.<br>Example: 16:00:00
     * @param  ?string  $dropOffServiceType  The drop-off service types supported by the specified location. If sort criteria is given as  LATEST_EXPRESS_DROPOFF_TIME and dropoffservicetype is GROUND then backend  will take the SORT_BY_LATEST_GROUND_TIME as sort criteria.<br>Example: FedEx Ground.
     * @param  ?string[]  $carrierCodes  Unique code to identify the transporter.
     * @param  ?bool  $getCall  Get a call. <br>Valid values: True, False.
     */
    public function __construct(
        public readonly array $location,
        public readonly ?array $locationsSummaryRequestControlParameters = null,
        public readonly ?array $constraints = null,
        public readonly ?string $locationSearchCriterion = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $multipleMatchesAction = null,
        public readonly ?Sort $sort = null,
        public readonly ?TrackingInfo $trackingInfo = null,
        public readonly ?bool $sameState = null,
        public readonly ?bool $sameCountry = null,
        public readonly ?string $redirectToHoldType = null,
        public readonly ?array $locationAttrTypes = null,
        public readonly ?array $locationCapabilities = null,
        public readonly ?array $packageAttributes = null,
        public readonly ?array $locationTypes = null,
        public readonly ?bool $includeHoliday = null,
        public readonly ?string $dropoffTime = null,
        public readonly ?string $dropOffServiceType = null,
        public readonly ?array $carrierCodes = null,
        public readonly ?bool $getCall = null,
    ) {
    }
}
