<?php
//This is a crud application with update.php file

    include('connection.php');

    $id=$_GET['id'];
    $query="SELECT * FROM `ftflbook`.`userinfo` WHERE `userinfo`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);

    $radio=$rows['gender'];
    /*$birth_year=$rows['byear'];
    $birth_month=$rows['bmonth'];
    $birth_day=$rows['bday'];*/

    $dob=$rows['dob'];
    $dob2=explode('-',$dob);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ftfl Book</title>
</head>
<body>
<h2>Ftfl Book</h2>
<form action="ftfl_list.php?id=<?php echo $_GET['id'] ?>" method="post">
    <input type="hidden" id="update_id" value="<?php echo $id ?>" />
    <div>
        <label>First Name: </label>
        <input type="text" name="first_name" value="<?php echo $rows['first_name']?>" />
    </div>
    <div>
        <label>Last Name: </label>
        <input type="text" name="last_name" value="<?php echo $rows['last_name']?>" />
    </div>
    <div>
        <label>Email: </label>
        <input type="text" name="email" value="<?php echo $rows['email']?>" />
    </div>
    <div>
        <label>Password: </label>
        <input type="text" name="password" value="<?php echo $rows['password']?>" />
    </div>

    <div>
        <label>Date of Birth:</label>
        <select name="dobyear">
            <option value="1" selected="selected">--Year--</option>
            <option <?php if ($dob2[0] == '2014' ) echo 'selected'; ?> value="2014">2014</option>
            <option <?php if ($dob2[0] == '2013' ) echo 'selected'; ?> value="2013">2013</option>
            <option <?php if ($dob2[0] == '2012' ) echo 'selected'; ?> value="2012">2012</option>
            <option <?php if ($dob2[0] == '2011' ) echo 'selected'; ?> value="2011">2011</option>
        </select>
        <select name="dobmonth">
            <option value="0" selected="selected">--Month--</option>
            <option <?php if ($dob2[1] == '01' ) echo 'selected'; ?> value="01">January</option>
            <option <?php if ($dob2[1] == '02' ) echo 'selected'; ?> value="02">February</option>
            <option <?php if ($dob2[1] == '03' ) echo 'selected'; ?> value="03">March</option>
            <option <?php if ($dob2[1] == '04' ) echo 'selected'; ?> value="04">April</option>
        </select>
        <select name="dobday">
            <option value="0" selected="selected">--Day--</option>
            <option <?php if ($dob2[2] == '1' ) echo 'selected'; ?> value="1">1</option>
            <option <?php if ($dob2[2] == '2' ) echo 'selected'; ?> value="2">2</option>
            <option <?php if ($dob2[2] == '3' ) echo 'selected'; ?> value="3">3</option>
            <option <?php if ($dob2[2] == '4' ) echo 'selected'; ?> value="4">4</option>
        </select>
    </div>

   <!-- <div>
        <label>Birth Date:</label>
        <select name="byear">
            <option  value="1" selected="selected">--Year--</option>
            <option <?php /*if ($birth_year == '2014' ) echo 'selected'; */?> value="2014">2014</option>
            <option <?php /*if ($birth_year == '2013' ) echo 'selected'; */?> value="2013">2013</option>
            <option <?php /*if ($birth_year == '2012' ) echo 'selected'; */?> value="2012">2012</option>
            <option <?php /*if ($birth_year == '2012' ) echo 'selected'; */?> value="2011">2011</option>
        </select>
        <select name="bmonth">
            <option value="1" selected="selected">--Month--</option>
            <option <?php /*if ($birth_month == 'January' ) echo 'selected'; */?> value="January">January</option>
            <option <?php /*if ($birth_month == 'February' ) echo 'selected'; */?> value="February">February</option>
            <option <?php /*if ($birth_month == 'March' ) echo 'selected'; */?> value="March">March</option>
            <option <?php /*if ($birth_month == 'April' ) echo 'selected'; */?> value="April">April</option>
        </select>
        <select name="bday">
            <option value="0" selected="selected">--Day--</option>
            <option <?php /*if ($birth_day == '1' ) echo 'selected'; */?> value="1">1</option>
            <option <?php /*if ($birth_day == '2' ) echo 'selected'; */?> value="2">2</option>
            <option <?php /*if ($birth_day == '3' ) echo 'selected'; */?> value="3">3</option>
            <option <?php /*if ($birth_day == '4' ) echo 'selected'; */?> value="4">4</option>
        </select>
    </div>-->
    <div>
        <label>Gender: </label>
        <input type="radio" name="gender" value="Male" id="male" <?php if($radio=='Male') echo 'checked="checked"'; ?> />
        <label>Male</label>
        <input type="radio" name="gender" value="Female" id="Female" <?php if($radio=='Female') echo 'checked="checked"'; ?> />
        <label>Female</label>
    </div>
    <!--<div>
        <label>Hobby: </label>
        <input type="text" name="Hobby" />
    </div>
    <div>
        <label>Favourite Food: </label>
        <input type="text" name="favourite_food" />
    </div>-->
    <div>
        <label>Comment: </label>
        <!--<input type="tex" name="comment" />-->
        <textarea name="comment"><?php echo $rows['comment'];?></textarea>
    </div>

    <div>
       <!-- <label>Created: </label>-->
        <input type="hidden" name="created" value="<?php echo $rows['created']?>" />
    </div>
    <div>
       <!-- <label>Modified: </label>-->
        <input type="hidden" name="modified" value="<?php echo $rows['modified']?>" />
    </div>

    <br />
    <input type="submit" name="update" value="Update" />
</form>
<br />
<br />
<a href="ftfl_list.php"><b>Go to List</b></a>
</body>
</html>