<?php
    session_start();

    include('db.php');
    // $image = $_FILES['file'];
    // print_r( $image);
    if (isset($_POST['submit'])) {
        $name=$_POST["name"];
        $description=$_POST["description"];
        $image=$_FILES["image"]["name"];
        $tmp_image=$_FILES["image"]["tmp_name"];

        move_uploaded_file($tmp_image, "../assets/$image");

        
       
        $sql="INSERT INTO `admin`(`name`, `description`,`image`) VALUES ('$name','$description','$image')";

        $result=mysqli_query($conn, $sql);

        if($result==true){
            header("location:events.php?success=this upload was success");
        }else{
            header("location:events.php?error=this was a failure");
        }

    }


?>