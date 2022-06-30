<?php
namespace Model;

class ProductType{

    private $id;
    private $name;

    public function __construct($id=null,$name=null){
        $this->id= $id;
        $this->name=$name;
    }



    public function get_id(){
        return $this->id;
    }

    
    public function get_name(){
        return $this->name;
    }

    public function set_id($id){
        $this->id=$id;
    }

    
    public function set_name($name){
        $this->name=$name;
    }

    public function output(){
        echo $this->id. "-". $this->name;
    }


}