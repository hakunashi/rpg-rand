<?php

class Character {

    /*----------STRUCTURE----------*/

    private ?string $name;
    private ?int $maxPv;
    private ?int $maxMana;
    private ?int $nowPv;
    private ?int $nowMana;
    private ?int $phyAtk;
    private ?int $magAtk;
    private ?int $def;
    private ?array $skills;
    private ?array $status;
    private ?array $bonus = [
        "maxPv" => 0,
        "maxMana" => 0,
        "phyAtk" => 0,
        "magAtk" => 0,
        "def" => 0
    ];

    /*----------CONSTRUCTOR----------*/

    public function __construct($paramSkills) {
        $this->maxPv = random_int(50, 250);
        $this->maxMana = random_int(30, 150);
        $this->phyAtk = random_int(10, 100);
        $this->magAtk = random_int(10, 100);
        $this->def = random_int(10, 100);

        $this->setSkills($paramSkills);

        if($this->maxPv <= 80) {
            echo "<br> Bonus PV bas!";
            $this->bonus["maxMana"] += 15;
            $this->bonus["phyAtk"] += 10;
            $this->bonus["magAtk"] += 10;
            $this->bonus["def"] += 10;
        }

        if($this->maxMana <= 50) {
            echo "<br> Bonus Mana bas!";
            $this->bonus["maxPv"] += 25;
            $this->bonus["phyAtk"] += 5;
            $this->bonus["magAtk"] += 5;
            $this->bonus["def"] += 3;
        }

        if($this->phyAtk <= 30) {
            echo "<br> Bonus Attaque physique bas!";
            $this->bonus["maxPv"] += 25;
            $this->bonus["maxMana"] += 15;
            $this->bonus["magAtk"] += 25;
            $this->bonus["def"] += 7;
        }

        if($this->magAtk <= 30) {
            echo "<br> Bonus Attaque magique bas!";
            $this->bonus["maxPv"] += 25;
            $this->bonus["maxMana"] += 15;
            $this->bonus["phyAtk"] += 25;
            $this->bonus["def"] += 7;
        }

        if($this->def <= 30) {
            echo "<br> Bonus defense bas!";
            $this->bonus["maxPv"] += 25;
            $this->bonus["maxMana"] += 15;
            $this->bonus["phyAtk"] += 10;
            $this->bonus["magAtk"] += 10;
        }

        $this->maxPv += $this->bonus["maxPv"];
        $this->nowPv = $this->maxPv;
        $this->maxMana += $this->bonus["maxMana"];
        $this->nowMana = $this->maxMana;
        $this->phyAtk += $this->bonus["phyAtk"];
        $this->magAtk += $this->bonus["magAtk"];
        $this->def += $this->bonus["def"];
    }

    /*----------SETTER----------*/

    public function setName(string $paramName) {
        $this->name = $paramName;
    }

    public function setSkills(array $paramSkills) {
        for ($i = 0; $i < 3; $i++) {
            $rand = random_int(0, count($paramSkills)-1);
            $this->skills[] = $paramSkills[$rand];
        }
    }

    /*----------GETTER----------*/

    public function getName(): ?string {
        return $this->name;
    }

    public function getMaxPv(): ?int {
        return $this->maxPv;
    }

    public function getMaxMana(): ?int {
        return $this->maxMana;
    }

    public function getNowPv(): ?int {
        return $this->nowPv;
    }

    public function getNowMana(): ?int {
        return $this->nowMana;
    }

    public function getPhyAtk(): ?int {
        return $this->phyAtk;
    }

    public function getMagAtk(): ?int {
        return $this->magAtk;
    }

    public function getDef(): ?int {
        return $this->def;
    }

    public function getSkills(): ?array {
        return $this->skills;
    }

    public function getStatus(): ?array {
        return $this->status;
    }

}

$competences = [
    "Attaque Rapide", 
    "Défense Magique", 
    "Frappe Critique", 
    "Régénération", 
    "Sort de Feu", 
    "Invocation d'Esprit", 
    "Protection Absolue", 
    "Tir Précis", 
    "Vol de Vie", 
    "Bouclier de Givre",
    "Tempête de Foudre",
    "Poison Mortel",
    "Lame Sombre",
    "Guérison Instantanée",
    "Météore Dévastateur",
    "Invisibilité",
    "Bénédiction Divine",
    "Onde de Choc",
    "Bouclier de Pierre",
    "Nova Solaire"
];

$perso1 = new Character($competences);
$perso1->setName("Perso A");
echo "<br> <u> Nom : " . $perso1->getName() . "</u> <br>";
echo "Max PV : " . $perso1->getMaxPv() . "<br>";
echo "Max Mana : " . $perso1->getMaxMana() . "<br>";
echo "Attaque physique : " . $perso1->getPhyAtk() . "<br>";
echo "Attaque magique : " . $perso1->getMagAtk() . "<br>";
echo "Défense : " . $perso1->getDef() . "<br> <br>";
for ($i = 0; $i < 3; $i++) {
    echo "skill " . $i + 1 . ": " . $perso1->getSkills()[$i] . "<br>";
}

$perso2 = new Character($competences);
$perso2->setName("Perso B");
echo "<br> <u> Nom : " . $perso2->getName() . " </u> <br>";
echo " Max PV : " . $perso2->getMaxPv() . "<br>";
echo "Max Mana : " . $perso2->getMaxMana() . "<br>";
echo "Attaque physique : " . $perso2->getPhyAtk() . "<br>";
echo "Attaque magique : " . $perso2->getMagAtk() . "<br>";
echo "Défense : " . $perso2->getDef() . "<br> <br>";
for ($i = 0; $i < 3; $i++) {
    echo "skill " . $i + 1 . ": " . $perso2->getSkills()[$i] . "<br>";
}

$perso3 = new Character($competences);
$perso3->setName("Perso C");
echo "<br> <u> Nom : " . $perso3->getName() . " </u> <br>";
echo " Max PV : " . $perso3->getMaxPv() . "<br>";
echo "Max Mana : " . $perso3->getMaxMana() . "<br>";
echo "Attaque physique : " . $perso3->getPhyAtk() . "<br>";
echo "Attaque magique : " . $perso3->getMagAtk() . "<br>";
echo "Défense : " . $perso3->getDef() . "<br> <br>";
for ($i = 0; $i < 3; $i++) {
    echo "skill " . $i + 1 . ": " . $perso3->getSkills()[$i] . "<br>";
}

?>