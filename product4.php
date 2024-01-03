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
                        <h2>Yoga 6 (13", 8)</h2>
                        <div class="ratings" >
                            <h3>4.8</h3>
                            <img src="images/rating.png" alt="">
                            <h4>1.6k ratings</h4>
                            <h4>3.4k sold</h4>
                        </div>
                        <div class="price" >
                            <h1><del>₱59,094.00</del></h1>
                            <h2>₱44,153.16</h2>
                            <div class="discount" >
                                <h2>25% OFF</h2>
                            </div>
                        </div>
                        <div class="description" >
                            <h3>Catch up on your own inspirations</h3>
                            <ul>
                                <li>Inspiration waits for no one, so pack the power to get the job done with the Yoga 6 Gen 8.</li>
                                <li>Powered by the AMD Ryzen™ 7000 Series processor, this 2-in-1 laptop lets you do more in less time. </li>
                                <li>And with an all-day battery, plus rapid charge for a quick boost, you are free to work and play anywhere.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="orderButtons" >
                    <form action="product4.php" method="POST">
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
        $query = "SELECT * FROM `products` WHERE id = 4";
        $product = mysqli_query($conn, $query);
        $quantitydraft = $_POST['quantity'];
        if(mysqli_num_rows($product)){
            $row = mysqli_fetch_assoc($product);
            $name = $row['product_Name'];
            $price = $row['product_price'];
            $image = $row['product_image'];
        }
        try{
            $cart = "INSERT INTO `cart` VALUES ('4', '$image', '$name', '$price', '$quantitydraft')";
            $query2 = mysqli_query($conn, $cart);
        }
        catch(mysqli_sql_exception){
            $cart = "UPDATE `cart` SET quantity = quantity + '$quantitydraft' WHERE id = 4";
            $query2 = mysqli_query($conn, $cart);
        }
    }
?>
</body>
</html>