<?php
namespace Model;

class Product{

    private $sku;
    private $name;
    private $price;
    private $size;
    private $weight;
    private $height;
    private $width;
    private $length;
    private $productType;

    public function __construct($sku=null,$name=null,$price=null,$size=null,$weight=null,$height=null,$width=null,$length=null,$productType=null)
    {
        
        $this->sku= $sku;
        $this->name=$name;
        $this->price= $price;
        $this->size=$size;
        $this->weight= $weight;
        $this->height=$height;
        $this->width= $width;
        $this->length=$length;
        $this->productType= $productType;        
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getprice()
    {
        return $this->price;
    }

    public function getsize()
    {
        return $this->size;
    }


    public function getWeight()
    {
        return $this->weight;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getProductType()
    {
        return $this->productType;
    }   

    public function setSku($sku){
        $this->sku=$sku;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function setPrice($price){
        $this->price=$price;
    }

    public function setSize($size){
        $this->size=$size;
    }

    public function setWeight($weight){
        $this->weight=$weight;
    }

    public function setHeight($height){
        $this->height=$height;
    }

    public function setWidht($width){
        $this->width=$width;
    }

    public function setLength($length){
        $this->length=$length;
    }

    public function setProductType($productType){
        $this->productType=$productType;
    }
    


}

