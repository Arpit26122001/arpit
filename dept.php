<?php
include('connection.php');

    $id = $_POST['id'];
    $dept = $_POST['dept'];

    // if (mysqli_query($con, $sql)) {
    //     echo "Record Successfully Inserted";
    // } else {
    //     echo "Data Insertion Failed"; //.mysqli_error();
    // }

    if ($_POST['submit']) {
        $sql = "insert into tbl_dept values('$id', '$dept')";
        $result = mysqli_query($con, $sql);
        echo "<script>alert('record inserted');</script>";
    } else {
        echo "<script>alert('record not found');</script><br>";
    }

    mysqli_close($con);
?>

<html>
	<head>
	<style> 
		input[type=text] {
		width: 30%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		display:flex;
		flex-direction: column;
		border: 2px solid red;
		border-radius: 4px;
		
}
</style>
	</head>
	<body>
		<form action="" method="POST">
        <label for="id">Id</label>
        <input type="text" name="id" required>

        <label for="dept">Department</label>
        <input type="text" name="dept" required>

        <input type="submit" name="submit" value="Submit">
    </form>
	</body>
</html>