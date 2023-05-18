<?php

trait Chargeable
{
    private $unit = "Watt";
    private $wattage;
    private $connector;
    public function setCharge(int $wattage, string $connector)
    {
        if (!is_numeric($wattage)) {
            throw new Exception("Wattage must be a numeric value!");
        } elseif (empty($connector)) {
            throw new Exception("Connector value required!");
        } else {
            $this->wattage = $wattage;
            $this->connector = $connector;
        }
    }

    public function getCharge()
    {
        return "Alimentation: {$this->wattage} {$this->unit}, {$this->connector} connector";
    }
}
