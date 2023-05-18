<?php

/* watt, connector -> mac MagSafe */
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
        }
    }

    public function getCharge()
    {
        echo "Alimentation: {$this->wattage} {$this->unit}, {$this->connector} connector";
    }
}
