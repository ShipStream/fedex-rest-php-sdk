<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use ShipStream\FedEx\Api\ShipV1;
use ShipStream\FedEx\Api\ShipV1\Requests\CancelTag;

final class CancelTagShipmentIdTest extends TestCase
{
    /**
     * Pins the positional anchor of the `shipmentid` modifications.json patch: that patch
     * merges `required: true` into `parameters.0` of the cancel-tag path, so if a future
     * FedEx spec reorders the parameter list the merge would silently mark a different
     * parameter required and regenerate this one back to a nullable path segment.
     */
    public function test_shipmentid_stays_a_non_nullable_string(): void
    {
        foreach ([
            [ShipV1\Api::class, 'cancelTag'],
            [CancelTag::class, '__construct'],
        ] as [$class, $method]) {
            $parameter = (new ReflectionMethod($class, $method))->getParameters()[0];
            $where = "{$class}::{$method}()";

            $this->assertSame('shipmentid', $parameter->getName(), "First parameter of $where");
            $this->assertSame('string', (string) $parameter->getType(), "Parameter type in $where");
            $this->assertFalse($parameter->getType()->allowsNull(), "Nullability in $where");
        }
    }
}
