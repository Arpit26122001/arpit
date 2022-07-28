<?php
    if(isset($_REQUEST['btnsubmit']))
    {
        // file uploding
        // echo "Name :".$_FILES['myfile']['name']."<br>";
        // echo "Type :".$_FILES['myfile']['type']."<br>";
        // echo "Size :".$_FILES['myfile']['size']."<br>";
        // echo "Temp Name :".$_FILES['myfile']['tmp_name']."<br>";
        // echo "Error :".$_FILES['myfile']['error']."<br>";
    }
?>
<html>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" name="btnsubmit">

    </form>
</body>

</html>