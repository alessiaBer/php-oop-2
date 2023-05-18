<?php
class Screen
{
    public $size;
    public $type;
    public $resolution;

    public function __construct(float $size, string $type, string $resolution)
    {
        $this->size = $size;
        $this->type = $type;
        $this->resolution = $resolution;
    }
};
