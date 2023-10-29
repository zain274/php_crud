

<?php

include("connection.php");
if(isset($_POST['insertbtn'])){
  $uname= $_POST['insertname'];
  $uemail= $_POST['insertemail'];
  $upass= $_POST['insertpass'];
  $ucity = $_POST['insertcity'];
  $insertquery= "insert into usertbl (name,email,pass,city) values('".$uname."','".$uemail."','".$upass."','".$ucity."')";
  $insertqueryconnect= mysqli_query($con,$insertquery);
  if($insertqueryconnect){
    echo "<script>alert('Data has been added')</script>";
  }
  else{
    echo "<script>alert('Data not has been added')</script>";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

  <div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h4>Register </h4>
            <form  method="Post">
            <input type="text" placeholder="Enter Your Name" class="form-control" name="insertname">
            <br>
            <input type="text" placeholder="Enter Your Email" class="form-control" name="insertemail">
            <br>
            <input type="password" placeholder="Enter Your password" class="form-control" name="insertpass">
            <br>
            <input type="text" placeholder="Enter Your City" class="form-control" name="insertcity">
            <br>
            <button type="Submit" class="btn btn-warning" name="insertbtn">Add</button>


        </form>
        </div>
    </div>
    <table class="table table-hover table-bordered table-scripted">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>City</th>
     
      </tr>

      <?php
      $selectquery= "Select  * from usertbl";
      $slectqueryconnect= mysqli_query($con,$selectquery);
      while($r= mysqli_fetch_array($slectqueryconnect)){
        ?>
<br>
<br>
<br>
        <tr>
          <td><?php echo $r ['id']?></td>
          <td><?php echo $r ['Name']?></td>
          <td><?php echo $r ['email']?></td>
          <td><?php echo $r ['pass']?></td>
          <td><?php echo $r ['city']?></td>
          <td><a href="delete.php?id=<?php echo $r['id']?>">Delete</a></td>
          <td><a href="update.php?id=<?php echo $r['id']?>">update</a></td>




        </tr>
        <?php
      }


      ?>

    </table>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

