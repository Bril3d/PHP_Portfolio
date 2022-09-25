<?php
session_start();
require_once 'lib/portfolio.php';


$res = deleteProject($_GET['proid']);


if($res == 1) {
    header("LOCATION:allportfolio.php");
}else{
    header("LOCATION:allportfolio.php");
}