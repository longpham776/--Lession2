<?php
    function getAllCategory(){
        $objCategory= new Category();
        $dataCategory= $objCategory->getAll();
        return $dataCategory;
    }
?>