<?php

namespace Transportation\Transport;

use Transportation\Contracts\VehicleInterface;

class Bus implements VehicleInterface
{

    private $name = 'Bus';
    private $maxPassengers = 32;
    private $maxCargoWeight = 300;
    private $fuelConsumptionPer100km = 20;
    private $maxTripDistance = 200;
    private $depreciationCoefficient = 2;

    public function getName(): string {
        return $this->name;
    }

    public function getMaxPassengers(): int {
        return $this->maxPassengers;
    }

    public function getMaxCargoWeight(): float {
        return $this->maxCargoWeight;
    }

    public function getFuelConsumptionPer100km(): float {
        return $this->fuelConsumptionPer100km;
    }

    public function getMaxTripDistance(): float {
        return $this->maxTripDistance;
    }

    public function getDepreciationCoefficient(): float {
        return $this->depreciationCoefficient;
    }
}