<?php
    $action = Utilities::get("action", "index");
    switch ($action) {
        case 'index':
            include "./model/category.php";
            $dataCategory= getAllCategory();
            include "./view/category/index.php";
            break;
        
        default:
            # code...
            break;
    }
?>