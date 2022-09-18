<?php
    class Category extends Db{
        public function getAll(){
            return $this->selectQuery("select * from categorys");
        }
    }
?>