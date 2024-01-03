<?php
include('include/database.php');
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `cart` WHERE id= $delete_id") or die("query failed");
    if($delete_query){
        header('location:addtocart.php');
    }
    else{
        echo "Product not deleted";
        header('Location:addtocart.php');
    }
} 
if(isset($_POST['deleteall'])){
    $delete = "DELETE FROM cart";
    $query5 = mysqli_query($conn, $delete);
}
?>