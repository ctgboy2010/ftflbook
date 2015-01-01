<?php
////This is a crud application with delete.php file

    include('connection.php');

    $id=$_GET['id'];
    $query="DELETE FROM `ftflbook`.`dropmulti` WHERE `dropmulti`.`id` = $id";
    mysqli_query($con,$query);
    header('location: multi_list.php');
    mysqli_close($con);
?>