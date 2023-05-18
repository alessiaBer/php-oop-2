<?php

class Desktop extends Computer
{
    public $monitor;
    public $mouse;
    public $computerCase;
    public function __construct($imgPath, $model, string $monitor, $screen, $keyboard, string $mouse, string $computerCase, $usbPorts, $hardDrive, $cdDrive, $motherboard)
    {
        parent::__construct($imgPath, $model, $screen, $keyboard, $usbPorts, $hardDrive, $cdDrive, $motherboard);
        $this->monitor = $monitor;
        $this->mouse = $mouse;
        $this->computerCase = $computerCase;
    }

    public function setType()
    {
        return $this->type = "Desktop";
    }
};
