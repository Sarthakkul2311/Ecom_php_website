<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product-page</title>
            <!-- BootStrap cdn  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
            <form action=" insert.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
               <p class="text-center fw-bold fs-3 text-warning">Product Details: </p>
            </div>

             <div class="mb-3">
                <label  class="form-label">Product Name</label>
                 <input type="text" name="Pname" class="form-control"  placeholder="Enter Product Name">
             </div>

             <div class="mb-3">
                <label  class="form-label">Product Cost</label>
                 <input type="text" name="Pcost" class="form-control"  placeholder="Enter Product Cost">
             </div>

             <div class="mb-3">
                <label  class="form-label">Add Product Image</label>
                 <input type="file" name="Pimage" class="form-control" >
             </div>

             <div class="mb-3">
                <label  class="form-label">Select Page Category</label>
                <select class="form-select" name="Pages">
                    <option value="Home">Home</option>
                    <option value="Bat">Bat</option>
                    <option value="Ball">Ball</option>
                    <option value="Racket">Racket</option>
                </select>
             </div>
            <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>

            </form>
            </div>
        </div>
    </div>    
    
    <!-- Fetch Data -->
<div class="container">
    <div class="row">
       <div class="col-md-8 m-auto">


    <table class="table border border-warning table-hover border my-5">

    <thead  class="bg-dark text-white fs-5 font-monospace text-center">
    <th>Id</th>
    <th>Name</th>
    <th>Cost</th>
    <th>Image</th>
    <th>Category</th>  
    <th>Delete</th>
    </thead>
    
    <tbody class="text-center">
        <?php 
        
        include 'Config.php';
        $Record = mysqli_query($con, "SELECT * FROM `tblproduct` ");

           while($row=mysqli_fetch_array($Record)) 

           echo"
           
           <tr>
                <td>$row[Id]</td>
                <td>$row[PName]</td>
                <td>$row[PCost]</td>
                <td><img src='$row[PImage]'></td>
                <td>$row[PCategory]</td>
                <td><a href='' class = 'btn btn-danger' >Home</a></td>
           </tr>
           
           ";
        
        ?>
    </tbody>

    </table>

        </div> 
    </div>
</div>   
        
    </body>
    </html>