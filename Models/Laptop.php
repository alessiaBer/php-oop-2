<?php
require_once __DIR__ . '/Traits/Chargeable.php';
/*
Basepanel -> touchpad,
Toppanel ->  cam
battery
ac power adaptor
*/
class Laptop extends Computer
{
    use Chargeable;
    public $touchPad; 
    public $cam; 
    public $acAdaptor;
    public function __construct($imgPath, $model, $screen, string $touchPad, $keyboard, string $cam, $usbPorts, $hardDrive, $cdDrive, $motherboard, string $acAdaptor)
    {
        parent::__construct($imgPath, $model, $screen, $keyboard, $usbPorts, $hardDrive, $cdDrive, $motherboard);
        $this->touchPad = $touchPad;
        $this->cam = $cam;
        $this->acAdaptor = $acAdaptor;
    }

    public function setType()
    {
        return $this->type = "Laptop";
    }
};
