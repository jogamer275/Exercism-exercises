<?php

class PizzaPi
{
    public function calculateDoughRequirement($Pizzas, $Persons)
    {
        return $Pizzas * (($Persons * 20) + 200);
    }

    public function calculateSauceRequirement($Pizzas)
    {
        return $Pizzas * 125/250;
    }

    public function calculateCheeseCubeCoverage($CheeseDimension, $Thickness, $Diameter)
    {
        return floor(($CheeseDimension**3)/($Thickness * pi() * $Diameter));
    }

    public function calculateLeftOverSlices($Pizzas, $Friends)
    {
        return floor(($Pizzas*8)%$Friends);
    }
}
