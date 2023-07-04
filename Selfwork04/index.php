<?php

class Company
{
    // attributes
    public $name;
    public $location;
    public $totEmployees;
    public static $avg_wage;
    public static $total = 0;
    public $space = " ";

    // constructor method thtùat create a object
    public function __construct($_name, $_location, $_totEmployees)
    {
        $this->name = $_name;
        $this->location = $_location;
        $this->totEmployees = $_totEmployees;
        self::$avg_wage = 1500;
    }

    // methods
    public function stampSentence(){

        if ($this->totEmployees >= 50) {
            echo "The company :" . $this->name . $this->space . "situate in : " . $this->location . $this->space . "have:" . $this->totEmployees . "\n";
        }else{
            echo "The company :" . $this->name . $this->space . "situate in : " . $this->location . $this->space . "don't have emplyees" . "\n";
        }
    }

    // // method that calculate the cost for year
    public function costForYear(){
        $costForMonth =  self::$avg_wage * $this->totEmployees;
        $costForYear = $costForMonth * 12;
        echo "The cost for year is:" . $costForYear . "\n";

        self::$total += $costForYear;
    }

    // // static method
    // method that stamp total
    public static function stampTotal(){
        echo "The total is:" . self::$total . "\n";
    }
}

$company1 = new Company("Aulab", "Bari", 50);
$company2 = new Company("Ford", "Dearborn, Michigan", 173000);
$company3 = new Company("Netflix", "Los Gatos", 12800);
$company4 = new Company("Aulab", "Bari", 50);
$company5 = new Company("Aulab", "Bari", 50);

var_dump($company1);
var_dump($company2);
var_dump($company3);
var_dump($company4);
var_dump($company5);

$company1->stampSentence();
$company1->costForYear();
$company1->stampTotal();

$company2->stampSentence();
$company2->costForYear();
$company2->stampTotal();

$company3->stampSentence();
$company3->costForYear();
$company3->stampTotal();