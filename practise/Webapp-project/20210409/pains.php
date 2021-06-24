<?php

include "clothes.php";

class Paint extends clothes{
    protected $length;
    protected $waist;
    public function __construct($outsidename,$outsidePrize,$outsideLength,$outsideWaist){
        parent::__construct($outsidename,$outsidePrize);
        $this->length = $outsideLength;
        $this-> waist = $outsideWaist;
        
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