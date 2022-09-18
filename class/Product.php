<?php
    class Product extends Db{
        public function getAll(){
            return $this->selectQuery("SELECT * FROM products WHERE del=0");
        }
        public function getOnPage($offset){
            return $this->selectQuery("SELECT * FROM products WHERE del=0 ORDER BY id ASC LIMIT 10 OFFSET ".$offset."");
        }
    }
?>