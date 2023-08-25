<?php

class Fraction {
    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator) {
        if ($denominator == 0) {
            throw new Exception("Denominator can't be zero'");
        }

        $this->numerator = $numerator;
        $this->denominator = $denominator;
        $this->simplify();
    }

     private function simplify() {
        $greatestCommonDivisor = $this->calculateGreatestCommonDivisor($this->numerator, $this->denominator);
        $this->numerator /= $greatestCommonDivisor;
        $this->denominator /= $greatestCommonDivisor;
    }

    private function calculateGreatestCommonDivisor($a, $b) {
        if ($b == 0) {
            return $a;
        }
    }
}