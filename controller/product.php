<?php
    $action = Utilities::get("action", "index");
    switch ($action) {
        case 'index':
            $offset=isset($_GET["page"])?$_GET["page"] : 0;
            include "./model/product.php";
            include "./model/category.php";
            $dataCategory=getAllCategory();
            $dataProduct= getAllProduct($offset);
            include "./view/product/index.php";
            break;
        
        default:
            # code...
            break;
    }
?>