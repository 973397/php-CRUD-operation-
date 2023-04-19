<?php
include"../connection.php";

// store url id below the var
$urlstoredata=$_GET['updateid'];
$sql="SELECT * FROM `student`  WHERE id='$urlstoredata'";
// execute
$qry =mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($qry);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../frontend/form.css" rel="stylesheet" >
    <title>UPDATE!</title>
  </head>
  <body>
    <div class="container">
    <h1 class="heading"><u>Student deta insert form</u></h1>
    <div class="container">
   
        <div class="form">
        
        <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">First name</label>
            <input type="text" class="form-control" value="<?php echo $result['firstname'] ?>" name="fname" placeholder="enter your first name " required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lname" placeholder="enter your last name " value="<?php echo $result['lastname'] ?>"  required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">password</label>
            <input type="text" class="form-control" name="pass" placeholder="enter your password "  value="<?php echo $result['password'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control"name="mail"  placeholder="enter your email  "   value="<?php echo $result['Email'] ?>" required>
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
            <label   class="form-label">Address</label>
            <textarea  name="area" class="textarea" rows="5"><?php echo $result['textarea']?></textarea>
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
$urlstoredata=$_GET['updateid'];
    if(isset($_POST["register"])){
            $firstname  =$_POST["fname"];
              $lastname =$_POST["lname"];
              $password =$_POST["pass"];
              $email    = $_POST["mail"];
              $Gender   = $_POST["gen"];
              $textarea =$_POST["area"];
              
       //if($firstname!="" && $lastname!="" &&$password!="" &&$email!="" && $textarea= ""){
        $sql ="UPDATE `student` SET `firstname`='$firstname',`lastname`=' $lastname ',`password`='$password ',`Email`='$email',`gender`='$Gender',`textarea`='$textarea' WHERE id='$urlstoredata' ";
              $result=mysqli_query($conn,$sql);
              if($result){
                  echo"<script>alert('updated')</script>";
                //header("Location:display.php");
                ?>
                <!-- html mata tag to redirect -->
                <meta http-equiv = "refresh" content = "0; url =http://localhost/myproject/studentdatabaseSystem%20-%20Copy/backend/display.php" />
                <?php
              }
              else {
                echo "not updated record"; 
              }
            }
        ?>
    
        
    </div>
  </body>
</html>