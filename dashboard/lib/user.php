<?php


function addNewUser($name,$email,$password){

    $con = mysqli_connect('localhost','root','','portfolio');
    

    $sql = "INSERT INTO `user` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";

    mysqli_query($con,$sql);

    $res = mysqli_affected_rows($con);

    if($res ==1){
        return true;
    }else{
        return false;
    }
}


function login($email,$password){
    $con = mysqli_connect('localhost','root','','portfolio');

    $sql = "SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password' ";

    $q = mysqli_query($con,$sql);


    $res = mysqli_fetch_assoc($q);


    return $res;

}