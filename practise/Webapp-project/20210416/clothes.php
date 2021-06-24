<?php
include "doWash.php";
class Tshirt implements dowash{
    private $name;
    private $prize;

    public function __construct($outsidename,$outsidePrize){
        $this->name = $outsidename;
        $this->prize = $outsidePrize;
    }

      public function setName($outsidename){
        $this->name = $outsidename;
    }
    public function getName(){
        return $this->name;
    }
    
    public function setPrize($outsidePrize){
        $this->prize = $outsidePrize;
    }
    public function getPrize(){
        return $this->prize;
    }

    public function dowash(){
        return "使用洗衣機清洗!";
    }

    public function __destruct()
    {

    }
}
?>