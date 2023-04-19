<?php
include "../connection.php";
$deltedatastore =($_GET['deleteid']);
$sql="DELETE FROM `student` WHERE id='$deltedatastore' ";
$qry=mysqli_query($conn,$sql);
if(!$qry){
    die("not".mysqli_connect_error());
}
else{
    //echo "deleted connected";
    //header("localtion:display.php");
    header("Location:display.php");
}
?>