<?php 
class Computer
{
    protected $type;
    /* [ram, cpu + cpu fan] */
    /* screen pollici, keyboard nationality, usbports quante sono, harddrive tipo, cd drive c'è o no  */
    public function __construct(public string $imgPath, public string $model, public Screen $screen, public Keyboard $keyboard, public int $usbPorts, public string $hardDrive, public $cdDrive, public string $motherboard)
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