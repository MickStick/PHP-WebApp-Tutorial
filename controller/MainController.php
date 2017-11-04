<?php
    $appview = "";
    $title = "";
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_SESSION["logged"])){
            
        }else{
            $title = "PHP Home";
            $appview = "views/home.php";
        }
    }else if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["view"])){
            echo $_POST["view"];
            $appview = "views/".$_POST["view"];
        }
    }
    

?>