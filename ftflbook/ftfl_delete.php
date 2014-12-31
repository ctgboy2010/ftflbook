<?php
////This is a crud application with delete.php file

    include('connection.php');

    $id=$_GET['id'];
    $query="DELETE FROM `ftflbook`.`userinfo` WHERE `userinfo`.`id` = $id";
    mysqli_query($con,$query);
    header('location: ftfl_list.php');
    mysqli_close($con);
?>