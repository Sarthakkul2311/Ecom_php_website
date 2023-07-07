<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form </title>

    <!-- BootStrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- FontWorld CDN  -->
    <script src="https://kit.fontawesome.com/902e474c5f.js" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: #788888;
        }
    </style>

</head>
<body>
    
   
<div class="container">
        <div class="row">
            <div class="col-md-6 shadow p-3 bg-white m-auto border border-info mt-5">
                <p class="text-warning text-center fs-3 fw-bold my-3">User Register</p>
                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <label for="">UserName: </label>
                        <input type="text" name="name" placeholder="Enter UserName" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">UserEmail: </label>
                        <input type="email" name="email" placeholder="Enter User Email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">UserNumber: </label>
                        <input type="number" name="number" placeholder="Enter User Number" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">UserPassword: </label>
                        <input type="password" name="password" placeholder="Enter User Password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <button name="submit" class="w-100 bg-warning fs-4 text-white ">REGISTER</button>
                    </div>

                    <div class="mb-3">
                        <button class="w-100 bg-danger fs-4 text-white "><a href="login.php" class="text-decoration-none text-white">ALREADY REGISTERED</a></button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
</html>