<?php

include "clothes.php";

class Paint extends Tshirt{
    protected $length;
    protected $waist;
    public function __construct($outsidename,$outsidePrize,$outsideLength,$outsideWaist){
        parent::__construct($outsidename,$outsidePrize);
        $this->length = $outsideLength;
        $this-> waist = $outsideWaist;
        $this->setName($outsidename);
        $this->setPrize($outsidePrize);
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

    public function getlength(){
        return $this->length;
    }
    public function getwaist(){
        return $this->waist;
    }
    public function dowash(){
        $string = "用手洗再".parent::dowash();
        return $string;
    }
    public function __destruct()
    {
        
    }

}

?>