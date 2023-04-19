<?php
// $conn=mysqli_connect("localhost","root","","sdms");
// if(!$conn){
//     die("not".mysqli_connect_error());
// }
// else{
//     echo" connection sure"; 
// }
include"../connection.php";

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./form.css">
    <title>registation form!</title>
</head>

<body>
    <h1 class="heading"> </h1>
    <div class="container">
   
        <div class="form">
        <h1 class="heading"><u>Registation form</u></h1>
        <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">First name</label>
            <input type="text" class="form-control" name="fname" placeholder="enter your first name " required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lname" placeholder="enter your last name " required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">password</label>
            <input type="password" class="form-control" name="pass" placeholder="enter your password "required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control"name="mail"  placeholder="enter your email  " required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Gender</label>
            <select class="select" name="gen">
                <option value="op">Gender</option>
                <option value="op">Male</option>
                <option value="op">Female</option>
                <option value="op">others</option>
            </select>
        </div>
        <div class="mb-3">
            <label   class="form-label">textarea</label>
            <textarea  name="area" class="textarea" rows="5"></textarea>
        </div>
        <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Agree to terms and condition</label>
  </div>
  <div class="col-auto">
        <input type="submit" id="sub" name="register" class="btn btn-info mb-3" value="submit">
    </div>
        </div>
        </form>
    </div>
<!-- C R E A T E P A G E  -->

    <?php
    if(isset($_POST["register"])){
            $firstname  =$_POST["fname"];
              $lastname =$_POST["lname"];
              $password =$_POST["pass"];
              $email    = $_POST["mail"];
              $Gender   = $_POST["gen"];
              $textarea =$_POST["area"];
              
       //if($firstname!="" && $lastname!="" &&$password!="" &&$email!="" && $textarea= ""){
        $sql ="INSERT INTO `student` (`firstname`, `lastname`, `password`, `Email`, `gender`, `textarea`)VALUES ('$firstname', ' $lastname', '$password', ' $email', '$Gender ', '$textarea')";
              $result=mysqli_query($conn,$sql);
              if(!$result){
                  die("not".mysqli_errno($conn));
              }
              else{
                //echo "itsssssssss happly updated "; 
              
            } 
        }           
  ?>
    
</body>
</html>