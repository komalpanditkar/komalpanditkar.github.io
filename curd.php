<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>contact</title>
   
  </head>
  <body>
<?php

if(isset( $_POST['b1'])){
  b1();
}
 if(isset( $_POST['b2'])){
  b2();
}
if(isset( $_POST['b3'])){
  b3();
}

function b1(){
  $servername="localhost";
$username="root";
$password ="";
$database="dbcurd";


$conn=mysqli_connect($servername,$username,$password,$database);
///dia the commection
if(!$conn){
    die("sorry connection is not connect sussesfuly". mysqli_connect_error());
}

  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
        $no=$_POST["no"]; //yith chalu30.43
        $name=$_POST["name"];
        $dicription=$_POST["des"];
  
    $qurey="INSERT INTO curd (no, name, decription) VALUES ( '$no','$name', '$dicription')";
    $res=mysqli_query($conn,$qurey);
    if($res){
     
             echo "<head><body><script> alert('sussesfuly submited');</script></body></head>";
            }
          }

}
function b2(){
  $servername="localhost";
  $username="root";
  $password ="";
  $database="dbcurd";
  
  
  $conn=mysqli_connect($servername,$username,$password,$database);
  ///dia the commection
  if(!$conn){
      die("sorry connection is not connect sussesfuly". mysqli_connect_error());
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
            $no=$_POST["no"]; //yith chalu30.43
            $name=$_POST["name"];
            $dicription=$_POST["des"];
      
          $qurey="DELETE FROM curd WHERE curd.name = '$name'";
           $res=mysqli_query($conn,$qurey);
              if($res){
              
                       echo "<head><body><script> alert('sussesfuly deleted');</script></body></head>";
                      }
                    }
}
function b3(){
  $servername="localhost";
  $username="root";
  $password ="";
  $database="dbcurd";
  
  
  $conn=mysqli_connect($servername,$username,$password,$database);
  ///dia the commection
  if(!$conn){
      die("sorry connection is not connect sussesfuly". mysqli_connect_error());
  }
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
      $no=$_POST["no"]; //yith chalu30.43
      $name=$_POST["name"];
      $dicription=$_POST["des"];
    
    $qurey="UPDATE curd SET name = '$name' WHERE curd.no = '$no'";
    $res=mysqli_query($conn,$qurey);
    if($res){
      $insert=true;
             echo "<head><body><script> alert('susssus updated');</script></body></head>";
            }
          }
  }
?>

  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CURD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Reference</a>
      </li>
    </ul>
  </div>
</nav> -->


 
<div class="container-fluid my-5  " style="border: solid black 2px; width: 1000px; height: 450px; margin: auto; background-image: url('planeimg.jpg'); color:black; text-decoration:solid 2px white; font-family:monstatre; " >
<form action="curd.php" method="post">
    <center><h2><b>Add Note</b></h2></center>
    <div class="container-fluid my-4" style="b: solid black 2px; color:black; background-color:lightgray;">
    <label for="no"><b>Number</b></label>
    <input type="text" name="no" class="form-control" id="no" placeholder="no">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

  </div>
<div class="container-fluid my-4" style="b: solid black 2px; color:black; background-color:rgb(219, 231, 204);">
    <label for="name"><b>Name</b></label>
    <input type="text" name="name" class="form-control" id="name" placeholder="name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

  </div>
  
  <div class="container-fluid my-4"style="b: solid black 2px; color:black;background-color:lightgray;">
    <label for="des"><b>Discription</b></label>
    <input type="text" name="des" class="form-control" id="des" placeholder="Discription">
  </div>

   <div class="container-fluid my-4" style="b: solid black 2px; color:white;">
  <button type="submit" name="b1" class="b">Submit</button>
  <button type="submit" name="b2" class="b">Delete record</button>
  <button type="submit" name="b3" class="b">Update record</button>

</div>
<!-- <div class="container-fluid my-4">
  <button type="button" class="btn btn-primary">delet record</button>

</div> -->
</form>
</div>
<!-- <script>

  function sub(){ 
    $insert=true;
  }

  function del(){
    $delete=true;
  }

  function up(){
    $update=true;
  }
</script> -->

<table class="table" border="2">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
      <th scope="col">Order now</th>
      
                     
      
    </tr>
  </thead>
  <tbody>
  <?php 
  $servername="localhost";
  $username="root";
  $password ="";
  $database="dbcurd";
  
  
  $conn=mysqli_connect($servername,$username,$password,$database);
  ///dia the commection
  if(!$conn){
      die("sorry connection is not connect sussesfuly". mysqli_connect_error());
  }
  
$quary="SELECT * FROM curd";
$res=mysqli_query($conn,$quary);

  while($row = mysqli_fetch_assoc($res)){
      
      echo "<tr>
      <th scope='row'>". $row['no'] ." </th>
      <td>" . $row['name'] . "</td>
      <td>" . $row['decription'] ." </td>
      <td>". $row['date'] . "</td>
      <td>".  '<a href="order.php">order</a>' . "</td>  

    </tr>";
    
  }
//INSERT INTO curd (no, name, decription, date) VALUES ('', 'rutuja', 'jkk yjj ui pouyv gfr dregh', current_timestamp());
?>
   
  </tbody>
</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
 </body>
</html>