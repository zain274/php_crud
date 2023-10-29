<?php
include("connection.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
    $selectquery="select * from usertbl  where id = '".$_GET["id"]."'";
    $selectqueryconnect=mysqli_query($con,$selectquery);
    while($r= mysqli_fetch_array($selectqueryconnect)){
        ?>
 <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="" method="post">
                    <input type="text" value="<?php echo $r["Name"]?>" class="form-control" name="updatename">
                    <br>
                    <input type="text" value="<?php echo $r["email"]?>" class="form-control" name="updateemail">
                    <br>
                    <input type="text"  value="<?php echo $r["pass"]?>" class="form-control" name="updatepass">
                    <br>
                    <input type="text" value="<?php echo $r["city"]?>" class="form-control" name="updatecity">
<br>
<button type="submit" class="btn btn-warning" name="update">Upgrade</button>


                </form>
            </div>
        </div>
      </div>
        <?php
    }
    ?>


<?php
if(isset($_POST["update"])){
    $nameupdate=$_POST['updatename'];
    $emailupdate=$_POST['updateemail'];
    $pass=$_POST['updatepass'];
    $city=$_POST['updatecity'];
    $updatequery="update usertbl set name='".$nameupdate."', email='". $emailupdate."', pass='".$pass."', city= '".$city."' WHERE  id = '".$_GET['id']."'";
    $mysqlquery= mysqli_query($con,$updatequery);
    if($mysqlquery){
        header("Location:insert.php");
    }
    else{
        echo "<script> alert('Error found')</script>";
    }



}

?>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>