<?php
//echo $appview;
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET["view"])){
            $url = "controller/MainController.php";
            $fields = array("view"=>urlencode($_GET["view"]));
            $urlfields = "";
            foreach($fields as $key=>$value){
                $urlfields .= $key.'='.$value.'&';
            }
            rtrim($urlfields);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, count($fields));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $urlfields);

            $result = curl_exec($ch);
            curl_close($ch);
            echo $_GET["view"];
        }
    }
?>