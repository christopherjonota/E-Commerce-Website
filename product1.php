<?php 
include('include/database.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinkpad X1 Carbon Gen 11 (14″ Intel)</title>
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
                            <img src="images/img1.png" alt="">
                        </div>
                    </div>              
                    <div class="productDescription" >
                        <h2>Thinkpad X1 Carbon Gen 11 (14″ Intel)</h2>
                        <div class="ratings" >
                            <h3>4.9</h3>
                            <img src="images/rating.png" alt="">
                            <h4>1.2k ratings</h4>
                            <h4>2.4k sold</h4>
                        </div>
                        <div class="price" >
                            <h1><del>₱95,058.39</del></h1>
                            <h2>₱90,239.64</h2>
                            <div class="discount" >
                                <h2>4% OFF</h2>
                            </div>
                        </div>
                        <div class="description" >
                            <h3>Ultralight. Ultrapowerful.</h3>
                            <ul>
                                <li>Certified Intel®Evo™ with up to 13th Gen Intel®Core™ vPro®CPU</li>
                                <li>Ultralight starting weight of just 1.12kg / 2.48lb</li>
                                <li>Super-responsive with twice the memory as previous gen</li>
                                <li>Optimized thermals with dual fan & rear venting</li>
                                <li>4 x 360-degree mics with AI-based noise cancellation & Dolby Voice®</li>
                                <li>Robust security & MIL-SPEC testing for durability</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="orderButtons" >
                    <form action="product1.php" method="POST">
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
        $query = "SELECT * FROM `products` WHERE id = 1";
        $product = mysqli_query($conn, $query);
        $quantitydraft = $_POST['quantity'];
        if(mysqli_num_rows($product)){
            $row = mysqli_fetch_assoc($product);
            $name = $row['product_Name'];
            $price = $row['product_price'];
            $image = $row['product_image'];
        }
        
        try{
            $cart = "INSERT INTO `cart` VALUES ('1', '$image', '$name', '$price', '$quantitydraft')";
            $query2 = mysqli_query($conn, $cart);
        }
        catch(mysqli_sql_exception){
            $cart = "UPDATE `cart` SET quantity = quantity + '$quantitydraft' WHERE id = 1";
            $query2 = mysqli_query($conn, $cart);
        }
    }
?>
</body>
</html>