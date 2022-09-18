<?php
    class Utilities{
        public static function get($key, $default=""){
            return isset($_GET[$key])? trim($_GET[$key]): $default;
        }
        public static function post($key, $default=""){
            return isset($_POST[$key]) ? trim($_POST[$key]): $default;
        }
        public static function file($key, $default){
            $temp= isset($_FILES[$key])? $_FILES[$key]: $default;
            if($temp!=""){
                if($temp["error"]==0) return $temp;
            }
            return $default;
        }
    }
?>