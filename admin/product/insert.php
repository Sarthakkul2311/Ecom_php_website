<?php

if(isset($_POST['submit'])){
        include 'Config.php';
    $product_name = $_POST['Pname'];
    $product_cost = $_POST['Pcost'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
        $img_des = "Uploadimage/".$image_name;
    move_uploaded_file($image_loc, "Uploadimage/".$image_name);    
    $product_category = $_POST['Pages'];


    // insert product

    mysqli_query($con, "  INSERT INTO `tblproduct`( `PName`, `PCost`, `PImage`, `PCategory`) VALUES ('$product_name', '$product_cost', '$img_des', '$product_category' ) ");

    echo "
    Upload Successful!!  
    Go back to previous Page.
    ";

}
?>