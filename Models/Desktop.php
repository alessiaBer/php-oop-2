<?php 
class Desktop extends Computer {
    /* mouse brand, monitor brand, computer case ?, type desktop comp*/
    public function __construct($model, public string $monitor, $screen, $keyboard, public string $mouse, public string $computerCase, $usbPorts, $hardDrive, $cdDrive, $motherboard) {
        parent::__construct($model, $screen, $keyboard, $usbPorts, $hardDrive, $cdDrive, $motherboard);
        $this->monitor = $monitor;
        $this->mouse = $mouse;
        $this->computerCase = $computerCase;
    }
};