<?php
include('connection.php');
$sql ="select * form tbl_dept";
$result=mysqli_query($con,$sql);
?>
<html>

<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Department</td>
            <td>Action</td>
        </tr>
        <?php
        while($row =mysqli_fetch_object($result))
        {
        ?>
        <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->department; ?></td>
            <td><a href="#">Edit</a>&nbsp; <a href="#">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>