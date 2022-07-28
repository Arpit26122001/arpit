<?php 
 if(isset($_REQUEST['btnsubmit']))
 {
    move_uploaded_file($_FILES['myfile']
    ['tmp_name'],"T:/php/".$_FILES['myfile']['name']);
    echo "file upload";

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