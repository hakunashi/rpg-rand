<?php

namespace SkillNameSpace;

class Skills {
    /*----------STRUCTURE----------*/

    private $name;
    private $type;
    private $elem;
    private $source;
    private $cost;
    private $minDamage;
    private $maxDamage;
    private $affecStatus;
    private $chanceStatus;

    /*----------CONSTRUCTOR----------*/

    public function __construct($name, $type, $elem, $source, $cost, $minDamage, $maxDamage, $affecStatus, $chanceStatus) {
        $this->name = $name;
        $this->type = $type;
        $this->elem = $elem;
        $this->source = $source;
        $this->cost = $cost;
        $this->minDamage = $minDamage;
        $this->maxDamage = $maxDamage;
        $this->affecStatus = $affecStatus;
        $this->chanceStatus = $chanceStatus;
    }

    /*----------SETTER----------*/


    /*----------GETTER----------*/

    public function getName() {
        return $this->name;
    }

    public function getDamage() {
        return random_int($this->minDamage, $this->maxDamage);
    }
}


?>