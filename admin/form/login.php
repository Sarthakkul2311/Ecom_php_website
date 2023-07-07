<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- BootStrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    
<div class="container">
        <div class="row">
            <div class="col-md-6 shadow m-auto bg-white font-monospace p-3 border border-primary mt-3">
            <form action=" login1.php " method="POST" >

            <div class="mb-3">
               <p class="text-center fw-bold fs-3 text-warning">Login: </p>
            </div>

             <div class="mb-3">
                <label  class="form-label">Name: </label>
                 <input type="text" name="username" class="form-control"  placeholder="Enter Username">
             </div>

             <div class="mb-3">
                <label  class="form-label">Password </label>
                 <input type="password" name="userpassword" class="form-control"  placeholder="Enter Password">
             </div>

            <button class="bg-danger fs-4 fw-bold my-3 form-control text-white">Login</button>

            </form>
            </div>
        </div>
    </div>    

</body>
</html>
