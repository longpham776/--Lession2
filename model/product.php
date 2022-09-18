<?php
    function getAllProduct(){
        $objProduct= new Product();
        $dataProduct= $objProduct->getAll();
        return $dataProduct;
    }
    function getOnPage($offset){
        $objProduct= new Product();
        $dataProduct= $objProduct->getOnPage($offset);
        return $dataProduct;
    }
?>