<?php

include "db.php";
$id=$_GET["id"];
$sql="DELETE FROM `admin` WHERE `id`='$id'";

$result=mysqli_query($conn, $sql);

if($result){
    header("location:page.php?success=this was a success");
}else{
    header("location:page.php?error=this was an error");
}

?>