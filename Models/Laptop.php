<?php
require_once __DIR__ . '/Traits/Chargeable.php';
class Laptop extends Computer
{
    use Chargeable;
    public $touchPad; 
    public $cam;
    public function __construct($imgPath, $model, $screen, string $touchPad, $keyboard, string $cam, $usbPorts, $hardDrive, $cdDrive, $motherboard)
    {
        parent::__construct($imgPath, $model, $screen, $keyboard, $usbPorts, $hardDrive, $cdDrive, $motherboard);
        $this->touchPad = $touchPad;
        $this->cam = $cam;
    }

    public function setType()
    {
        return $this->type = "Laptop";
    }
};
