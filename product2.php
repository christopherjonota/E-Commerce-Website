<?php 
include('include/database.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legion 5i (15", Gen 7)</title>
    <link rel="stylesheet" href= "css/productPage.css">
</head>
<?php 
include('navigationBar.php');
?>
<body>
    <div class="container" >
        <div class="con1" >
            <div class="con2" >
                <div class="productDetails" >
                    <div class="productImage" >
                        <div class="image" >
                            <img src="images/img2.png" alt="">
                        </div>
                    </div>              
                    <div class="productDescription" >
                        <h2>Legion 5i (15", Gen 7)</h2>
                        <div class="ratings" >
                            <h3>4.7</h3>
                            <img src="images/rating.png" alt="">
                            <h4>1.0k ratings</h4>
                            <h4>1.4k sold</h4>
                        </div>
                        <div class="price" >
                            <h1><del>₱82,058.00</del></h1>
                            <h2>₱79,995.00</h2>
                            <div class="discount" >
                                <h2>3% OFF</h2>
                            </div>
                        </div>
                        <div class="description" >
                            <h3>Built for all players</h3>
                            <ul>
                                <li>Geared for gaming and redesigned for even more, the Legion 5i Gen 7 (15″ Intel) laptop is a revolution of mobile and mighty engineering. </li>
                                <li>The thinnest and strongest generation yet, it packs 12th Gen Intel® Core™ processors and an optional NVIDIA® GeForce RTX™ 3070 Ti GPU (140W).</li>
                                <li>Enjoy a 15.6″ up to WQHD screen with 165Hz refresh rate and you’ll be competing with the pros.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="orderButtons" >
                    <form action="product2.php" method="POST">
                        <div class="quantity" >
                            <p>Quantity:</p>
                                <input type="number" name="quantity" id="quantity" min="1" max="20" value="1">
                        </div>
                        <div class="addToCart">     
                                <button type="submit" name="addtocart" ><img src="images/shopping-cart1.png" alt="">Add To Cart</button>                      
                        </div>
                        <div class="buyNow" >
                            <button type="submit">Buy Now</button>
                        </div>
                    </form>  
                </div>
            </div>      
        </div>
    </div>
<?php 
    include('footer.php');
    if(isset($_POST['quantity'])){
        $query = "SELECT * FROM `products` WHERE id = 2";
        $product = mysqli_query($conn, $query);
        $quantitydraft = $_POST['quantity'];
        if(mysqli_num_rows($product)){
            $row = mysqli_fetch_assoc($product);
            $name = $row['product_Name'];
            $price = $row['product_price'];
            $image = $row['product_image'];
        }
        
        try{
            $cart = "INSERT INTO `cart` VALUES ('2', '$image', '$name', '$price', '$quantitydraft')";
            $query2 = mysqli_query($conn, $cart);
        }
        catch(mysqli_sql_exception){
            $cart = "UPDATE `cart` SET quantity = quantity + '$quantitydraft' WHERE id = 2";
            $query2 = mysqli_query($conn, $cart);
        }
    }
?>
</body>
</html>