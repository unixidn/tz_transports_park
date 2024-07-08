<?php

namespace Transportation\Contracts;

interface VehicleInterface
{
    public function getName(): string;
    public function getMaxPassengers(): int;
    public function getMaxCargoWeight(): float;
    public function getFuelConsumptionPer100km(): float;
    public function getMaxTripDistance(): float;
    public function getDepreciationCoefficient(): float;
}