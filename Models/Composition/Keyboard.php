<?php

class Keyboard
{
    public $nationality;
    public $hasNumericKeypad;
    public $color;
    public function __construct(string $nationality, bool $hasNumericKeypad, string $color)
    {
        $this->nationality = $nationality;
        $this->hasNumericKeypad = $hasNumericKeypad;
        $this->color = $color;
    }
}
