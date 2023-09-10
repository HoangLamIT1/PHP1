<?php
    session_start();
    $base_url = "http://hoanglamit.com/";
    $autoload['helper'] = array('url');
    $ketnoi = new mysqli("localhost","dhl","dhl","dhl") or die("ERROR CONNECT");
?>