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
        return $this->calculateGreatestCommonDivisor($b, $a % $b);
    }

    public function getNumerator() {
        return $this->numerator;
    }

    public function getDenominator() {
        return $this->denominator;
    }

    public function __toString() {
        return "{$this->numerator}/{$this->denominator}";
    }

    public function add(Fraction $other) {
        $newNumerator = ($this->numerator * $other->denominator) + ($other->numerator * $this->denominator);
        $newDenominator = $this->denominator * $other->denominator;

        return new Fraction($newNumerator, $newDenominator);
    }

    
}


$fraction1 = new Fraction(5, 3);
$fraction2 = new Fraction(6, 2);

$sum = $fraction1->add($fraction2);
echo "Sum of fraction: " . $sum . "\n";
