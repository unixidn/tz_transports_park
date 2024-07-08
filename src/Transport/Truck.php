<?php

namespace Transportation\Transport;

use Transportation\Contracts\VehicleInterface;

class Truck implements VehicleInterface
{
    private $name = 'Truck';
    private $maxPassengers = 2;
    private $maxCargoWeight = 10000;
    private $fuelConsumptionPer100km = 30;
    private $maxTripDistance = 500;
    private $depreciationCoefficient = 3;

    public function getName(): string
    {
        return $this->name;
    }

    public function getMaxPassengers(): int
    {
        return $this->maxPassengers;
    }

    public function getMaxCargoWeight(): float
    {
        return $this->maxCargoWeight;
    }

    public function getFuelConsumptionPer100km(): float
    {
        return $this->fuelConsumptionPer100km;
    }

    public function getMaxTripDistance(): float
    {
        return $this->maxTripDistance;
    }

    public function getDepreciationCoefficient(): float
    {
        return $this->depreciationCoefficient;
    }

}