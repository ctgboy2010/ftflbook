<?php
    include('connection.php');

    $id=$_GET['id'];
    $query="SELECT * FROM `ftflbook`.`dropmulti` WHERE `dropmulti`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);

    /*$hob=$rows['hobby'];
    $fav=$rows['food'];
    $cities=$rows['cities'];*/
    $hob=explode(',',$rows['hobby']);
    $fav=explode(',',$rows['food']);
    $cities=explode(',',$rows['cities']);

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="multi_list.php?id=<?php echo $_GET['id'] ?>" method="post">
    <input type="hidden" id="update_id" value="<?php echo $id ?>" />
    <div>
        <label>Full Name: </label>
        <input type="text" name="full_name" value="<?php echo $rows['full_name']; ?>" />
    </div>
    <br>
    <div>
        <label>Hobby: </label>
        <div>
            <input type="checkbox" name="hobby[]" <?php if($hob[0]=='Reading Book') echo 'checked="checked"';  ?> value="Reading Book">Reading Book<br />
            <input type="checkbox" name="hobby[]" <?php if($hob[1]=='Travelling') echo 'checked="checked"';  ?> value="Travelling">Travelling<br />
            <input type="checkbox" name="hobby[]" <?php if($hob[2]=='Programming') echo 'checked="checked"';  ?> value="Programming">Programming<br />
            <input type="checkbox" name="hobby[]" <?php if($hob[3]=='Games') echo 'checked="checked"';  ?> value="Games">Games<br />
        </div>
    </div>

    <br>
    <div>
        <label>Favorite Food: </label>
        <div>
            <input type="checkbox" name="food_1" <?php if($fav[0]=='Food1') echo 'checked="checked"';  ?> value="Food1">Food1<br />
            <input type="checkbox" name="food_2" <?php if($fav[1]=='Food2') echo 'checked="checked"';  ?> value="Food2">Food2<br />
            <input type="checkbox" name="food_3" <?php if($fav[2]=='Food3') echo 'checked="checked"';  ?> value="Food3">Food3<br />
            <input type="checkbox" name="food_4" <?php if($fav[3]=='Food4') echo 'checked="checked"';  ?> value="Food4">Food4<br />
        </div>
    </div>
    <br>
    <div>
        <label>Preferred Job Location: </label>
        <br>
        <div>
            <br>
            <select name="cities[]" multiple="multiple">
                <option <?php if($cities[0]=='Dhaka') echo 'selected="selected"';  ?> value="Dhaka">Dhaka</option>
                <option <?php if($cities[1]=='Chittagong') echo 'selected="selected"';  ?> value="Chittagong">Chittagong</option>
                <option <?php if($cities[2]=='Khulna') echo 'selected="selected"';  ?> value="Khulna">Khulna</option>
                <option <?php if($cities[3]=='Jshore') echo 'selected="selected"';  ?> value="Jshore">Jshore</option>
                <option <?php if($cities[4]=='Rajshahi') echo 'selected="selected"';  ?> value="Rajshahi">Rajshahi</option>
                <option <?php if($cities[5]=='Borishal') echo 'selected="selected"';  ?> value="Borishal">Borishal</option>
                <option <?php if($cities[6]=='Comilla') echo 'selected="selected"';  ?> value="Comilla">Comilla</option>
                <option <?php if($cities[7]=='Dinajpur') echo 'selected="selected"';  ?> value="Dinajpur">Dinajpur</option>
                <option <?php if($cities[8]=='Faridpur') echo 'selected="selected"';  ?> value="Faridpur">Faridpur</option>
                <option <?php if($cities[9]=='Narayangonj') echo 'selected="selected"';  ?> value="Narayangonj">Narayangonj</option>
                <option <?php if($cities[10]=='Rangamati') echo 'selected="selected"';  ?> value="Rangamati">Rangamati</option>
                <option <?php if($cities[11]=='Kagrachori') echo 'selected="selected"';  ?> value="Kagrachori">Kagrachori</option>
                <option <?php if($cities[12]=='Jorachori') echo 'selected="selected"';  ?> value="Jorachori">Jorachori</option>
                <option <?php if($cities[13]=='Noakhali') echo 'selected="selected"';  ?> value="Noakhali">Noakhali</option>
                <option <?php if($cities[14]=='Bbaria') echo 'selected="selected"';  ?> value="Bbaria">Bbaria</option>
                <!--<option <?php /*if($cities[0]=='Dhaka') echo 'selected="selected"';  */?> value="city16">city16</option>
                <option value="City17">City17</option>
                <option value="city18">city18</option>
                <option value="city19">city19</option>-->
            </select>
        </div>
    </div>
    <div>
        <input type="hidden" name="created" />
    </div>
    <div>
        <input type="hidden" name="modified" />
    </div>
    <div>
        <br>
        <input type="submit" name="update" value="Update">
    </div>
</form>
<br>
<a href="multi_list.php"><b>Go To List</b></a>
</body>
</html>