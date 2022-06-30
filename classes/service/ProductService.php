<?php

class ProductService extends Dbh{


    public function getProducts(){
        $sql="Select * from product";
        $stm=$this->connect()->query($sql);

        $rows=$stm->fetchAll();
        $result=array();

        foreach ($rows as $row){
            $product=new Model\Product(
                $row['sku'],$row['name'],
                $row['price'],$row['size'],
                $row['weight'],$row['height'],
                $row['width'],$row['length'],
                $row['product_type']
                    );
            array_push($result,$product);
        }

        return $result;
    }

    public function insertProduct($product){
        var_dump($product);
        $sql="Insert into product(sku,name,price,product_type) values (?,?,?,?)";
        $stm=$this->connect()->prepare($sql);
        $values=array($product->getSku(),$product->getName(),$product->getPrice(),$product->getProductType());
        // var_dump($values);

        $stm->execute($values);
        echo "Inserted Succesfully";
        
    }
    

}