<?php include"../connection.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,300&display=swap" rel="stylesheet"> 
    <title>display page!</title>
    <style>
      body{
        background-color:#96F8C4 ;
      }
      .head{
        color:blueviolet;
        text-align: center;
        font-family: 'Nunito Sans', sans-serif;
      } 
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">home page</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1 class="head">Display all record!</h1>
  <div class="container">
 

<!-- C R E A T E P A G E  -->
<table class="table table-dark table-striped" id="myTable">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Firstname </th>
      <th scope="col">Last name</th>
      <th scope="col">password </th>
      <th scope="col">Email </th>
      <th scope="col">gender</th>
      <th scope="col">Address</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php
   
    // display or read page
    $sql="SELECT * FROM `student`";
    $qry =mysqli_query($conn,$sql);
    $row=mysqli_num_rows($qry);
    //check receord is there or not 
    if($row > 0){
        //echo " recodeddd";
        while($data=mysqli_fetch_assoc($qry)){
          
            echo '<tr>
              <th scope="row">'.$data["id"].'</th>
              <td>'.$data["firstname"].'</td>
              <td>'.$data["lastname"].'</td>
              <td>'.$data["password"].'</td>
              <td>'.$data["Email"].'</td>
              <td>'.$data["gender"].'</td>
              <td>'.$data["textarea"].'</td>
              <td><button type="button" name="update" class="btn btn-success"><a href="update.php?updateid='.$data["id"].'" class="text-light">update</button>
              <button type="button" class="btn btn-danger"><a href="delete.php?deleteid='.$data["id"].'" class="text-light" >delete</a></button></td>
            </tr>';   
        }  
    }
    ?>
    </tbody>
    </table>';
  </div>
</body>

</html>