<?php
class DivideByZeroException extends Exception{};
class DivideByNegativeException extends Exception{};
function process($denominator){
    try{
        if($denominator ==0){
            throw new DivideByZeroException();
        }elseif($denominator <0){
            throw new DivideByNegativeException();
        }else{
            echo (25 / $denominator);
        }
    }catch(DivideByZeroException $ex){
        echo "發生被0除的意外";
    }catch(DivideByNegativeException $ex){
        echo"發生負數意外";
    }catch(Exception $ex){
        echo"未知";
    }
}
//執行進入點
process("-2");

?>