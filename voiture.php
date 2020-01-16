<?php
class voiture
{
    // Properties
    public $etat = 2;
    public $vitesse = 0;

    public $modele;
    public $marque;
    public $color;
    public $date;

    function __construct($c_marque, $c_modele, $c_color, $c_date)
    {
        $this->marque = $c_marque;
        $this->modele = $c_modele;
        $this->color = $c_color;
        $this->date = $c_date;
    }
    // Methods
    function get_marque()
    {
        return $this->marque;
    }
    function set_marque($p_marque)
    {
        $this->marque = $p_marque;
    }
    function get_modele()
    {
        return $this->modele;
    }
    function set_modele($p_modele)
    {
        $this->modele = $p_modele;
    }
    function get_color()
    {
        return $this->color;
    }
    function set_color($p_color)
    {
        $this->color = $p_color;
    }
    function get_date()
    {
        return $this->date;
    }
    function set_date($p_date)
    {
        $this->date = $p_date;
    }
    function get_etat()
    {
        return $this->etat;
    }
    function set_etat($p_etat)
    {
        $this->date = $p_etat;
    }
    function get_vitesse()
    {
        return $this->vitesse;
    }
    function set_vitesse($p_vitesse)
    {
        $this->vitesse = $p_vitesse;
    }
    function add_vitesse($p_vitesse)
    {
        $this->vitesse +=$p_vitesse;
    }
    function less_vitesse($p_vitesse)
    {
        $this->vitesse -=$p_vitesse;
    }
    function demarrer()
    {
        if ($this->etat == 2) {
            $this->etat = 3;
            echo $this->get_marque() . " " . $this->get_modele() . " demarre";
            echo "<br>";
            return;
        } else {
            echo $this->get_marque() . " " . $this->get_modele() . " ne peux pas démarrer elle est déjà entrain de faire autre chose.";
            echo "<br>";
            return;
        }
    }

    function accelerer()
    {
        if ($this->etat == 3) {
            if ($this->vitesse < 100) {
                $this->add_vitesse(50);
                echo  $this->marque . " " . $this->get_modele() . " accelere";
                echo $this->get_marque() . " " . $this->get_modele() .  " est maintenant a" . $this->get_vitesse() . "km/h";
                echo "<br>";
                return;
            } else {
                echo $this->modele . " ne peux pas acélerer, elle est déjà a fond ";
                echo "<br>";
                return;
            }
        } else {
            echo "Allume déjà le moteur !";
            echo "<br>";
            return;
        }
    }

    function decelerer()
    {
        if ($this->etat == 3) {
            if ($this->vitesse > 0) {
                $this->less_vitesse(50);
                echo  $this->marque . " " . $this->get_modele() . " decelere";
                echo "<br>";
                echo $this->get_modele() .  " est maintenant a " . $this->get_vitesse() . "km/h";
                echo "<br>";
                return;
            } else {
                echo $this->modele . " ne peux pas decelerer, elle est a arret ";
                echo "<br>";
                return;
            }
        } else {
            echo "Allume déjà le moteur !";
            echo "<br>";
            return;
        }
    }

    function arreter()
    {
        if ($this->vitesse === 0) {
            if ($this->etat == 3) {
                $this->set_etat(2);
                echo $this->get_marque() . " " . $this->get_modele() . "eteint son moteur.";
                echo "<br>";
                return;
            } else {
                echo $this->get_marque() . " " . $this->get_modele() . "est déja éteint";
                echo "<br>";
                return;
            }
        } else {
            echo $this->get_marque() . " " . $this->get_modele() . "roule encore";
            echo "<br>";
            return;
        }
    }
}
echo '<br>';
$a = new voiture('Peugeot', '308', 'noir', '2008');
$a->demarrer();
// $a->arreter();
// $a->demarrer();
// $a->decelerer();
// $a->arreter();
// $a->decelerer();
// $a->demarrer();
// $a->arreter();
// $a->accelerer();
