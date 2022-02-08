<?php

 function load_template($filename){
     $file_path = "__templates/$filename";
     if (file_exists($file_path)){
        include "$file_path";

     }
 };

 function load_css(){
     $current_file = basename(basename($_SERVER['SCRIPT_NAME'], "_"), ".php");
     $css_file = "../css/$current_file.css";
     print($css_file);

 }

?>