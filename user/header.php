<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BootStrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- FontWorld CDN  -->
    <script src="https://kit.fontawesome.com/902e474c5f.js" crossorigin="anonymous"></script>
</head>
<body>

<?php 

session_start();
$count=0;
if(isset($_SESSION['cart'])){
    $count=count($_SESSION['cart']);
}

?>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pb-2"><img src="shopcomlogo.png" alt="Shopcom Logo"></a>

<div class="d-flex">  
    <a href="index.php" class="text-warning text-decoration-none pe-2"> <i class="fa-solid fa-house-chimney"></i> Home</a>
    <a href="viewCart.php" class="text-warning text-decoration-none pe-2"> <i class="fa-sharp fas fa-cart-shopping"></i> Cart(<?php echo $count ?>) |</a>
  
    <span class="text-warning pe-2">
    <i class="fas fa-user"></i> Hello, 
    <?php 
        if(isset($_SESSION['user'])){
        echo $_SESSION['user']  ;
        echo "
        |<a href='form/logout.php' class='text-warning text-decoration-none pe-2' ><i class='fa-sharp fa-solid fa-arrow-right-to-bracket'></i>Logout</a>
        ";
    }
    else{
        echo"
        |<a href='form/login.php' class='text-warning text-decoration-none pe-2' ><i class='fa-sharp fa-solid fa-arrow-right-to-bracket'></i>Login</a>
            ";
    }
                
    ?>
    |
    <a href="../admin/mystore.php" class="text-warning text-decoration-none pe-2" >Admin</a>
    </span>

    </div>   
</nav>

<div class="bg-danger sticky-top font-monospace">
<ul class="list-unstyled d-flex justify-content-center">
    <li><a href="Bat.php" class="text-decoration-none text-white fw-bold f-4 px-5">Bat</a></li>
    <li><a href="Ball.php" class="text-decoration-none text-white fw-bold f-4 px-5">Ball</a></li>
    <li><a href="Racket.php" class="text-decoration-none text-white fw-bold f-4 px-5">Racket</a></li>
</ul>
</div>



</body>
</html>