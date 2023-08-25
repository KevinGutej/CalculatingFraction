<?php

class Fraction {
    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator) {
        if ($denominator == 0) {
            throw new Exception("Denominator can't be zero'");
        }
    }
}