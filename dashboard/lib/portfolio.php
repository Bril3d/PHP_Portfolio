<?php

function addNewPor($img,$description,$user_id){

    $con = mysqli_connect('localhost','root','','portfolio');
    

    $sql = "INSERT INTO `portfolio` (`img`,`description`,`user_id`) VALUES ('$img','$description','$user_id')";

    mysqli_query($con,$sql);

    $res = mysqli_affected_rows($con);

    if($res ==1){
        return true;
    }else{
        return false;
    }
}


function getPortfolio(){
    $con = mysqli_connect('localhost','root','','portfolio');
    $sql = "SELECT * FROM `userportfolio`";

    $query = mysqli_query($con,$sql);

    $projects = [];

    while($res = mysqli_fetch_assoc($query)){
        $projects[] = $res;
    };

    return $projects;
}


function deleteProject($pro_id){

    $con = mysqli_connect('localhost','root','','portfolio');
    

    $sql = "DELETE FROM `portfolio` WHERE portfolio.id = $pro_id";

    mysqli_query($con,$sql);

    $res = mysqli_affected_rows($con);

    if($res ==1){
        return true;
    }else{
        return false;
    }
}


function getPortfolioById($id){
    $con = mysqli_connect('localhost','root','','portfolio');
    $sql = "SELECT * FROM `userportfolio` WHERE `id` = $id";

    $query = mysqli_query($con,$sql);

    $res = mysqli_fetch_assoc($query);

    return $res;
}


function updatePro($id,$description,$img){

    $con = mysqli_connect('localhost','root','','portfolio');
    

    $sql = "UPDATE `portfolio` SET `description` = '$description'";
    
    if(!empty($img)){
        $sql .= ", `img` = '$img'";

    }

    $sql .= " WHERE `id` = $id";

    mysqli_query($con,$sql);

    $res = mysqli_affected_rows($con);

    if($res ==1){
        return true;
    }else{
        return false;
    }
}
?>
