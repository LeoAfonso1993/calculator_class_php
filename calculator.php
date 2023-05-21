<?php
//preciso criar uma classe que retorne valores quando eu usar seus metodos:
//add, sub, multiply, divide, total, and clear

class Calculator {
    public $total = 0;
    
    function add(float $num){
        $this->total += $num;
    }

    function sub(float $num){
        $this->total -= $num;
    }

    function multiply(float $num){
        $this->total *= $num;
    }

    function divide(float $num){
        $this->total /= $num;
    }

    function clear(){
        $this->total = 0;
    }

}

?>