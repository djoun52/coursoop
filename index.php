<?php
class Fruit
{
    // Properties
    public $name;
    public $color;
    function __construct($c_name, $c_color)
    {
        $this->name = $c_name;
        $this->color = $c_color;
    }
    // Methods
    function getName()
    {
        return $this->name;
    }
    function setName($p_name)
    {
        $this->name = $p_name;
    }
    function getColor()
    {
        return $this->color;
    }
    function setColor($p_color)
    {
        $this->color = $p_color;
    }
    function displayNameAndColor()
    {
        echo $this->name . " " . $this->color;
        return;
    }
}
class voiture 
{
public $demarer;
public $accelerer_10_km;
public $vitesse_max;
public $décelerer_10_km;
public $arreter;
function __construct()
{
    
}
}
echo '<br>';
// $a = new Fruit("Banane", "Vert");
// echo $a->getName();
// echo '<br>';
// echo $a->getColor();
// echo '<br>';
// $a->setName("Pomme");
// echo '<br>';
// echo $a->getName();
// echo '<br>';
// $a->setColor("Rouge");
// echo '<br>';
// echo $a->getColor();
$b = new Fruit("Avocat", "Jaune");
// echo $b->getName();
echo $b->displayNameAndColor();
