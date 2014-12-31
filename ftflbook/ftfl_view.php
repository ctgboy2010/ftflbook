<?php
    include('connection.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM `ftflbook`.`userinfo` WHERE `userinfo`.`id` = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    $c="<br />";
    echo $c."ID".str_repeat('&nbsp;',14).": "."<b>".$row['id']."</b>".$c;
    echo $c."First Name: "."<b>".$row['first_name']."</b>".$c;
    echo $c."Last Name".str_repeat('&nbsp;',1).": "."<b>".$row['last_name']."</b>".$c;
    echo $c."Email".str_repeat('&nbsp;',9).": "."<b>".$row['email']."</b>".$c;
    echo $c."Password".str_repeat('&nbsp;',3).": "."<b>".$row['password']."</b>".$c;
    echo $c."Date of Birth".str_repeat('&nbsp;',3).": "."<b>".$row['dob']."</b>".$c;
    echo $c."Gender".str_repeat('&nbsp;',6).": "."<b>".$row['gender']."</b>".$c;
    echo $c."Comment".str_repeat('&nbsp;',3).": "."<b>".$row['comment']."</b>".$c;
    echo $c."Created".str_repeat('&nbsp;',5).": "."<b>".$row['created']."</b>".$c;
    echo $c."Modified".str_repeat('&nbsp;',4).": "."<b>".$row['modified']."</b>".$c;
?>
<br />
<a href="ftfl_list.php">Goto List</a>
