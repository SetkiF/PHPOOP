<?php

class ProductTypeService extends Dbh{

    public function getProductTypes(){
        
        $sql= "Select * from product_type";
        $stm= $this->connect()->query($sql);
        
        $rows=$stm->fetchAll();
        $result=array();
        foreach($rows as $row){
            $test = new Model\ProductType($row['id'],$row['name']);
            array_push($result,$test);
        }

        return $result;
    }

    public function getProductType($id){

        $sql="Select * from product_type where id=?";
        $stm=$this->connect()->prepare($sql);
        $stm->execute([$id]);
        
    

        $row=$stm->fetch();
        $type=new Model\ProductType($row['id'],$row['name']);

        return $type;
    }
}   