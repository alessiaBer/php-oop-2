<?php 
/* [ram, cpu + cpu fan] */
class Computer
{
    protected $type;
    public $imgPath; 
    public $model;
    public $screen;
    public $keyboard;
    public $usbPorts; 
    public $hardDrive;
    public $cdDrive; 
    public $motherboard;
    public function __construct(string $imgPath, string $model, Screen $screen, Keyboard $keyboard, int $usbPorts, string $hardDrive, bool $cdDrive, string $motherboard)
    {
        $this->imgPath = $imgPath;
        $this->model = $model;
        $this->screen = $screen;
        $this->keyboard = $keyboard;
        $this->usbPorts = $usbPorts;
        $this->hardDrive = $hardDrive;
        $this->cdDrive = $cdDrive;
        $this->motherboard = $motherboard;
    }

    public function setType()
    {
        return $this->type = "Computer";
    }

    public function getType()
    {
        return $this->type;
    }
}