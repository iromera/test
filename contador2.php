<?php

    session_start(); //començar una sessio

    $num=0;
    if(isset($_SESSION['num'])){
        $num = $_SESSION['num'];
    }
    $_SESSION['num']=++$num;

?>