<?php
     if(isset($_REQUEST['btnsubmit']))
     {
        echo $_FILES['myfile']['type'];
        if ($_FILES['myfile']['type']=="image/jpeg" ||
        $_FILES['myfile']['type']=="image/jpg" ||
        $_FILES['myfile']['type']=="image/png" )
        {
            if($_FILES)['myfile']['size']<=1024{
                move_uploaded_file( $_FILES['myfile']['tmp_name'],
                f1/)
            }
        }
     }

?>
<html>

<body>
    <form method="post" enctype="multipart/form-data">
        Select Image : <input type="file" name="myfile" onchange="readURL(this);">
        <img id="blah" src="#" alt="your image"/>
        
        <input type="submit" name="btnsubmit">

    </form>
</body>

</html>