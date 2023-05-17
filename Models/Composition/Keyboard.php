<?php

class Keyboard {
    public function __construct(public string $nationality, public bool $hasNumericKeypad, public string $color) {
        $this->nationality = $nationality;
        $this->hasNumericKeypad = $hasNumericKeypad;
        $this->color = $color;
    }
}