<?php

// Class
class Hello{
    private string $hello;
    private int $number;

    // Construct
    public function __construct(string $hello, int $number){
        $this->hello = $hello;
        $this->number = $number;
    }

    // Getters
    public function getHello():string{
        return $this->hello;
    }
    public function getNumber():int{
        return $this->number;
    }

    // Setters
    public function setHello($hello){
        $this->hello = $hello;
        return $this->hello;
    }
    public function setNumber($number){
        $this->number = $number;
        return $this->number;
    }
}
?>