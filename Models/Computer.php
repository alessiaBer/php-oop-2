<?php 
class Computer {
    protected $type;
    /* [ram, cpu + cpu fan] */
    /* screen pollici, keyboard nationality, usbports quante sono, harddrive tipo, cd drive c'è o no  */
    public function __construct(public string $model, public string $screen, public string $keyboard, public int $usbPorts, public string $hardDrive, public boolval $cdDrive, public string $motherboard) 
    {
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
        return $this->type = "Desktop";
    }
    
    public function getType(Type $var = null)
    {
        return $this->type . "Computer";
    }
};