<?php
class Laptop extends Computer {
    /*
    Basepanel -> touchpad, 
    Toppanel ->  cam 
    battery 
    ac power adaptor 
    */
    public function __construct($model, $screen, public string $touchPad, $keyboard, public string $cam, $usbPorts, $hardDrive, $cdDrive, $motherboard, public string $acAdaptor) 
    {
        parent::__construct($model, $screen, $keyboard, $usbPorts, $hardDrive, $cdDrive, $motherboard);
        $this->touchPad = $touchPad;
        $this->cam = $cam;
        $this->acAdaptor = $acAdaptor;
    }

    public function setType()
    {
        if ($touchPad) {
            $this->type = "Laptop";
        }
    }
};