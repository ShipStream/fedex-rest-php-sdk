<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use ShipStream\FedEx\Api\ShipV1\Dto\Commodity;
use ShipStream\FedEx\Api\ShipV1\Dto\DisclaimMessageSet;
use ShipStream\FedEx\Api\ShipV1\Dto\ReferenceMessageSet;
use ShipStream\FedEx\Api\ShipV1\Dto\RegulatoryDetail;
use ShipStream\FedEx\Api\ShipV1\Dto\RegulatoryDetailInfo;

final class CommodityRegulatoryDetailsTest extends TestCase
{
    public function test_serializes_regulatory_details_as_a_list_of_objects(): void
    {
        $commodity = new Commodity(
            description: 'Cotton t-shirt',
            regulatoryDetails: [
                new RegulatoryDetail(
                    regulationCode: 'EU_DE_MINIMIS',
                    productId: '00012345600012',
                    productIdType: 'GTIN',
                    details: new RegulatoryDetailInfo(
                        standardManufacturerProductId: '00012345600012',
                        merchantProductId: 'SKU-123',
                    ),
                ),
            ],
        );

        $this->assertSame([
            [
                'regulationCode' => 'EU_DE_MINIMIS',
                'productId' => '00012345600012',
                'productIdType' => 'GTIN',
                'details' => [
                    'standardManufacturerProductId' => '00012345600012',
                    'merchantProductId' => 'SKU-123',
                ],
            ],
        ], $commodity->toArray()['regulatoryDetails']);
    }

    public function test_serializes_the_full_nested_message_sets(): void
    {
        $commodity = new Commodity(
            description: 'Children\'s plastic educational toy',
            regulatoryDetails: [
                new RegulatoryDetail(
                    regulationCode: 'CPSC',
                    productId: 'AMZ-TOY-45821',
                    productIdType: 'SKU',
                    details: new RegulatoryDetailInfo(
                        disclaimMessageSet: new DisclaimMessageSet(
                            disclaimCode: 'A',
                            intendedUseCode: '245.001',
                            intendedUseDescription: 'Educational toy',
                        ),
                        referenceMessageSet: new ReferenceMessageSet(
                            productVersion: '2026.01',
                            certifierId: 'brightkids-imports-us',
                            registryProductId: 'CPSC-2026-001234',
                        ),
                        standardManufacturerProductId: '00012345600012',
                        nonStandardManufacturerProductId: 'MPN-TS-001',
                        merchantProductId: 'SKU-123',
                    ),
                ),
            ],
        );

        $this->assertSame([
            [
                'regulationCode' => 'CPSC',
                'productId' => 'AMZ-TOY-45821',
                'productIdType' => 'SKU',
                'details' => [
                    'disclaimMessageSet' => [
                        'disclaimCode' => 'A',
                        'intendedUseCode' => '245.001',
                        'intendedUseDescription' => 'Educational toy',
                    ],
                    'referenceMessageSet' => [
                        'productVersion' => '2026.01',
                        'certifierId' => 'brightkids-imports-us',
                        'registryProductId' => 'CPSC-2026-001234',
                    ],
                    'standardManufacturerProductId' => '00012345600012',
                    'nonStandardManufacturerProductId' => 'MPN-TS-001',
                    'merchantProductId' => 'SKU-123',
                ],
            ],
        ], $commodity->toArray()['regulatoryDetails']);
    }

    public function test_round_trips_regulatory_details_through_deserialize(): void
    {
        $commodity = new Commodity(
            description: 'Cotton t-shirt',
            regulatoryDetails: [
                new RegulatoryDetail(
                    regulationCode: 'EU_DE_MINIMIS',
                    productId: '00012345600012',
                    productIdType: 'GTIN',
                    details: new RegulatoryDetailInfo(
                        disclaimMessageSet: new DisclaimMessageSet(disclaimCode: 'B'),
                        standardManufacturerProductId: '00012345600012',
                    ),
                ),
            ],
        );

        $restored = Commodity::deserialize($commodity->toArray());

        $this->assertInstanceOf(RegulatoryDetail::class, $restored->regulatoryDetails[0]);
        $this->assertInstanceOf(RegulatoryDetailInfo::class, $restored->regulatoryDetails[0]->details);
        $this->assertInstanceOf(
            DisclaimMessageSet::class,
            $restored->regulatoryDetails[0]->details->disclaimMessageSet
        );
        $this->assertSame($commodity->toArray(), $restored->toArray());
    }

    public function test_emits_an_empty_list_when_regulatory_details_is_empty(): void
    {
        $commodity = new Commodity(description: 'Cotton t-shirt', regulatoryDetails: []);

        $this->assertSame([], $commodity->toArray()['regulatoryDetails']);
    }

    public function test_omits_regulatory_details_when_none_are_set(): void
    {
        $commodity = new Commodity(description: 'Cotton t-shirt');

        $this->assertArrayNotHasKey('regulatoryDetails', $commodity->toArray());
    }
}
