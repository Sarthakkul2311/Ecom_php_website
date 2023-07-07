<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
 
    <!-- BootStrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- FontWorld CDN  -->
    <script src="https://kit.fontawesome.com/902e474c5f.js" crossorigin="anonymous"></script>
</head>

<?php

session_start();
if (!$_SESSION['admin']) {
  header("location:form/login.php");
}

include '../footer.php';

?>

<body>

<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white">Shopcom</a>
    <span>
    <i class="fa-sharp fa-light fa-folder-gear"></i>
    Hello, <?php echo $_SESSION['admin'];  ?>
    <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
    <a href="form/logout.php" class="text-decoration-none text-white" >Logout</a>  |
    <a href="" class="text-decoration-none text-white" >Userpanel</a>
    </span>
  </div>
</nav>

<div>
    <h2 class="text-center">Dashboard</h2>
</div>
<div class="col-md-6 bg-danger text-center m-auto">
    <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5" >Add Post</a>  
    <a href="" class="text-white text-decoration-none fs-4 fw-bold px-5" >Users</a>
</div>

</body>
</html>