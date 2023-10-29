<?php
include("connection.php");


?>

<?php
$dleteq = "delete from usertbl where id = '".$_GET["id"]."'";
$delteid= mysqli_query($con,$dleteq);

if($delteid){
    header("Location:insert.php");
}
else{
    echo "<script>alert('error found')</script>";
}
?>