<?php

namespace Transportation\Transport;

use Transportation\Contracts\VehicleInterface;

class Bike implements VehicleInterface
{

    public function getName(): string
    {
        // TODO: Implement getName() method.
    }

    public function getMaxPassengers(): int
    {
        // TODO: Implement getMaxPassengers() method.
    }

    public function getMaxCargoWeight(): float
    {
        // TODO: Implement getMaxCargoWeight() method.
    }

    public function getFuelConsumptionPer100km(): float
    {
        // TODO: Implement getFuelConsumptionPer100km() method.
    }

    public function getMaxTripDistance(): float
    {
        // TODO: Implement getMaxTripDistance() method.
    }

    public function getDepreciationCoefficient(): float
    {
        // TODO: Implement getDepreciationCoefficient() method.
    }
}