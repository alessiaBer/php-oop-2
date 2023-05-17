<?php 
/* LCD o LED */
class Screen {
    public function __construct(public float $size, public string $type, public string $resolution) {
        $this->size = $size;
        $this->type = $type;
        $this->resolution = $resolution;
    }
};