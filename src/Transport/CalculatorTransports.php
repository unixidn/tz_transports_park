<?php

namespace Transportation\Transport;

use Transportation\Contracts\VehicleInterface;

class CalculatorTransports
{
    private $vehicles = [];
    private $driverSalaryPerKm = 5;
    private $driverCoefficient = 1;

    public function __construct()
    {
        $this->vehicles[] = new Bus();
        $this->vehicles[] = new Truck();
    }

    public function calculate(int $numPassengers, float $cargoWeight, float $distance): void
    {
        foreach ($this->vehicles as $vehicle) {
            if ($this->checkTransportCargo($vehicle, $numPassengers, $cargoWeight, $distance)) {
                $cost = $this->calculateCost($vehicle, $distance);
                echo "Transport: {$vehicle->getName()}, Cost: $cost\n";
            }
        }
    }

    private function checkTransportCargo(VehicleInterface $vehicle, int $numPassengers, float $cargoWeight, float $distance): bool
    {
        return $numPassengers <= $vehicle->getMaxPassengers()
            && $cargoWeight <= $vehicle->getMaxCargoWeight()
            && $distance <= $vehicle->getMaxTripDistance();
    }

    private function calculateCost(VehicleInterface $vehicle, float $distance): float
    {
        return $this->costFuel($vehicle, $distance) + $this->paymentDriver($distance);
    }

    public function paymentDriver(float $distance): float
    {
        return $distance * $this->driverSalaryPerKm * $this->driverCoefficient;
    }

    public function costFuel(VehicleInterface $vehicle, float $distance): float
    {
        return ($vehicle->getFuelConsumptionPer100km() / 100) * $distance * $vehicle->getDepreciationCoefficient();
    }
}