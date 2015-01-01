<?php
//This is a crud application with list.php file

    include('connection.php');

    if(isset($_POST['update'])){
        $update_id=$_GET['id'];
        $dob3=$_POST['dobyear'].'-'.$_POST['dobmonth'].'-'.$_POST['dobday'];
        if(isset($update_id)){
            $sql = "UPDATE userinfo SET first_name='$_POST[first_name]',last_name='$_POST[last_name]',email='$_POST[email]',password='$_POST[password]',dob='$dob3',gender='$_POST[gender]',hobby='$_POST[hobby]',favourite_food='$_POST[favourite_food]',comment='$_POST[comment]',modified=NOW() WHERE id=$update_id";
            mysqli_query($con,$sql);
        }
    }

    $query="SELECT * FROM userinfo";
    $result=mysqli_query($con,$query);
?>
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            thead {color:red;}
            tbody {color:blue;}
            tfoot {color:black;}
            table,th,td
            {border:1px solid black;}
        </style>
    </head>
    <body>
    <table border="1" align="center" width="100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Comment</th>
            <th>Created</th>
            <th>Modified</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr align="center">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td><?php echo $row['dob'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['comment'] ?></td>
                <td><?php echo $row['created'] ?></td>
                <td><?php echo $row['modified'] ?></td>
                <td><a href="ftfl_view.php?id=<?php echo $row['id']?>">View</a> / <a href="ftfl_update.php?id=<?php echo $row['id']?>">Edit</a> / <a href="ftfl_delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="11"><a href="index.html"><b>Goto Entry New Record</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>