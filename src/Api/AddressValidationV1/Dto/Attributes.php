<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class Attributes extends Dto
{
    protected static array $attributeMap = [
        'poBox' => 'POBox',
        'poBoxOnlyZip' => 'POBoxOnlyZIP',
        'splitZip' => 'SplitZip',
        'suiteRequiredButMissing' => 'SuiteRequiredButMissing',
        'invalidSuiteNumber' => 'InvalidSuiteNumber',
        'resolutionInput' => 'ResolutionInput',
        'dpv' => 'DPV',
        'resolutionMethod' => 'ResolutionMethod',
        'dataVintage' => 'DataVintage',
        'matchSource' => 'MatchSource',
        'countrySupported' => 'CountrySupported',
        'validlyFormed' => 'ValidlyFormed',
        'matched' => 'Matched',
        'resolved' => 'Resolved',
        'inserted' => 'Inserted',
        'multiUnitBase' => 'MultiUnitBase',
        'zip11match' => 'ZIP11Match',
        'zip4match' => 'ZIP4Match',
        'uniqueZip' => 'UniqueZIP',
        'streetAddress' => 'StreetAddress',
        'rrConversion' => 'RRConversion',
        'validMultiUnit' => 'ValidMultiUnit',
        'addressType' => 'AddressType',
        'addressPrecision' => 'AddressPrecision',
        'multipleMatches' => 'MultipleMatches',
    ];

    /**
     * @param  ?bool  $poBox  true indicates the input address is a POBox.
     * @param  ?bool  $poBoxOnlyZip  True indicates a POBox only postal code.
     * @param  ?bool  $splitZip  True indicates when the address comes under a new ZIP code that did not exists previously.
     * @param  ?bool  $suiteRequiredButMissing  True indicates the resolved address includes a suite number, but it was missing in the request.
     * @param  ?bool  $invalidSuiteNumber  True indicates an invalid suite number.
     * @param  ?string  $resolutionInput  Type of input information (Currently only option is RAW_ADDRESS).
     * @param  ?bool  $dpv  True indicates the postal delivery address is valid delivery point.
     * @param  ?string  $resolutionMethod  Indicates the type of resolution method utilized to resolve the address.  Valid Values:  USPS_VALIDATE (US postal), NAVTEQ_GEO_VALIDATE or RELEATLAS_GEO_VALIDATED (US geo/map validated), CA_VALIDATE (Canada postal), GENERIC_VALIADTE (other validation).
     * @param  ?string  $dataVintage  Month and year of the reference data that was used to identify the address.
     * @param  ?string  $matchSource  Indicates 'Postal' or 'Map' date was used to match the address.
     * @param  ?bool  $countrySupported  True indicates the country is supported by the Address Validation service.
     * @param  ?bool  $validlyFormed  True indicates the address is in a valid format.
     * @param  ?bool  $matched  True indicates the address matches to a record in the address validation repository.
     * @param  ?bool  $resolved  True indicates the address was successfully resolved.
     * @param  ?bool  $inserted  True indicates the address was inserted into the Address data repository.
     * @param  ?bool  $multiUnitBase  True indicates that an input address was resolved to a standardized address for the base address of a multi-unit building. False indicates that the address was not resolved to a standardized address for the base address of a multi-unit building.
     * @param  ?bool  $zip11match  True indicates the input address was resolved to a standardized address based upon a Zip-11 postal code match. This is the highest level of postal code validation.
     * @param  ?bool  $zip4match  True indicates that the input address was resolved to a standardized address based upon at least a ZIP+4 match, for example 80003-5581.
     * @param  ?bool  $uniqueZip  True indicates that the postal code of the address is unique for a specific postal customer address. The ZIP may apply to a single unit or floor within a building, to an entire building, or to an institution or corporate campus.
     * @param  ?bool  $streetAddress  True indicates that the house number and street name were validated against reference data.
     * @param  ?bool  $rrConversion  True indicates a Rural Route conversion was applied to the address in order to process it.
     * @param  ?bool  $validMultiUnit  True indicates address contains multiple units.
     * @param  ?string  $addressType  valid values:<br>RAW - address country not supported.<br>NORMALIZED - address country supported, but unable to match the address against reference data.<br>STANDARDIZED - address service was able to successfully match the address against reference data.
     * @param  ?string  $addressPrecision  Indicates the depth/precision of the address.  MULTI_TENANT_UNIT indicates that the address has valid secondary information.<br>MULTI_TENANT_BASE indicates that the address is a valid multi tentant location but secondary information either was not provided or could not be validated.<br>PO_BOX indicates that the local postal authority services the address through a PO Box.<br>UNIQUE_ZIP indicates that the address could be validated to the postal code level and that postal code is a unique zip for the USPS.<br>STREET_ADDRESS / Street indicates that the location is not a valid multi tenant location.<br>StreetBuilding indicates that the address was validated to a building name that is in the reference data.<br>StreetOrganization indicates that the address was validated to an organization name that is in the reference data.<br>StreetName indicates that the address was validated to the street name level in reference data and the house number (if provided) could not be validated.valid values:<br>MULTI_TENANT_UNIT- address consists of multiple units, some could be BUSINESS, some could be MIXED.
     * @param  ?bool  $multipleMatches  True indicates the address requested has multiple matches available, usually due to a simPle difference such as a leading directional.
     */
    public function __construct(
        public readonly ?bool $poBox = null,
        public readonly ?bool $poBoxOnlyZip = null,
        public readonly ?bool $splitZip = null,
        public readonly ?bool $suiteRequiredButMissing = null,
        public readonly ?bool $invalidSuiteNumber = null,
        public readonly ?string $resolutionInput = null,
        public readonly ?bool $dpv = null,
        public readonly ?string $resolutionMethod = null,
        public readonly ?string $dataVintage = null,
        public readonly ?string $matchSource = null,
        public readonly ?bool $countrySupported = null,
        public readonly ?bool $validlyFormed = null,
        public readonly ?bool $matched = null,
        public readonly ?bool $resolved = null,
        public readonly ?bool $inserted = null,
        public readonly ?bool $multiUnitBase = null,
        public readonly ?bool $zip11match = null,
        public readonly ?bool $zip4match = null,
        public readonly ?bool $uniqueZip = null,
        public readonly ?bool $streetAddress = null,
        public readonly ?bool $rrConversion = null,
        public readonly ?bool $validMultiUnit = null,
        public readonly ?string $addressType = null,
        public readonly ?string $addressPrecision = null,
        public readonly ?bool $multipleMatches = null,
    ) {
    }
}
