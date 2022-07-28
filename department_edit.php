<?php
include('connection.php');
// $sql ="select * form tbl_dept";
// $result=mysqli_query($con,$sql);
$sql="select * from department where bankid =".$_GET['id'];
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_object($result);

if(isset($_REQUEST['btnsubmit'])){
    $ q="update tbl_dept set Department ='".$_REQUEST['department']."where id'".$_GET['id'];
    mysqli_query($con,$q);
}
?>