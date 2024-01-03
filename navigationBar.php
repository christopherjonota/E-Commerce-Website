<?php 
require('include/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navigationBar.css">
</head>
<?php 
$select_product = mysqli_query($conn, "SELECT * from `cart`") or die('query failed');
$row_count = mysqli_num_rows($select_product);
?>
<body>
    <div class = "container">
        <div class="navbar" >
            <div class = "logo">
                <a href="index.php"><img src="images/QCTech Logo.png" alt=""></a>
            </div>           
            <div class="searchbar" >
                <form action="index.php" method="post" >
                    <input type="text" name="search" placeholder="Search the brand of the product you want" >
                    <button type="submit" name="submit" ><img src="images/magnifying-glass.png" alt=""></button>
                </form>
            </div>  
            <div class = "buttons">
                <span id="cart"><a href="addtocart.php" ><img  src="images/shopping-cart.png" alt=""><sup><?php echo $row_count?></sup></a></span>
                <span id="burger"><a href="login.php">Logout</a></span>
            </div>            
        </div>
    </div>
</body>
</html>