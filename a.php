<?php
    //任意域名都可以访问我这个接口 
    header("Access-Control-Allow-Origin: *");
    $json = file_get_contents("shop.json");
    $json = json_decode($json);
    $arr = array("msg" => "200", "data" => $json);
    echo json_encode($arr);

?>