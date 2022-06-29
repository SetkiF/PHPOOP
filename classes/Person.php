<?php

class Person {

    public $name;
    public $surname;

    function __construct() {
        $this->name="Setki";
        $this->surname="Fejsko";
    }

    function output(){
        echo "<h1>".$this->name."-". $this->surname. "</h1>"; 
    }



}

?>