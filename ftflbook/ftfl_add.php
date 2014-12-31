<?php
//This is a crud application with add.php file
include('connection.php');

//$mul=implode(',',$_POST['favourite_food']);
//$mul = $_POST['favourite_food'];
$dob=$_POST['dobyear']."-".$_POST['dobmonth']."-".$_POST['dobday'];

/*$query="INSERT INTO `ftflbook`.`userinfo` (`id` ,`first_name` ,`last_name` ,`email` ,`password`,`byear`,`bmonth`,`bday` ,`gender`,`hobby`,`favourite_food` ,`comment` ,`created` ,`modified`)
            VALUES ('', '$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[password]','$_POST[byear]','$_POST[bmonth]','$_POST[bday]', '$_POST[gender]','$_POST[hobby]',implode(',','$_POST[favourite_food]'), '$_POST[comment]', NOW(),'');";*/

$query="INSERT INTO `ftflbook`.`userinfo` (`id` ,`first_name` ,`last_name` ,`email` ,`password`,`dob` ,`gender`,`comment` ,`created`)
            VALUES ('', '$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[password]','$dob', '$_POST[gender]', '$_POST[comment]', NOW());";


if(mysqli_query($con,$query))
    echo "Successfully added 1 data into database";
else
    die("Error: ".mysqli_error($con));
?>
<br />
<a href="index.html"><b>Add New Record</b></a>

<?php mysqli_close($con);?>