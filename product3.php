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
                        <h2>IdeaPad Flex 5i (14", Gen 7)</h2>
                        <div class="ratings" >
                            <h3>4.8</h3>
                            <img src="images/rating.png" alt="">
                            <h4>1.6k ratings</h4>
                            <h4>3.4k sold</h4>
                        </div>
                        <div class="price" >
                            <h1><del>₱55,058.00</del></h1>
                            <h2>₱52,245.26</h2>
                            <div class="discount" >
                                <h2>5% OFF</h2>
                            </div>
                        </div>
                        <div class="description" >
                            <h3>Power & versatility</h3>
                            <ul>
                                <li>Versatile 14″ 2-in-1 laptop that you can use in four different ways</li>
                                <li>Multitask seamlessly with cutting-edge Intel® Core™ processing</li>
                                <li>Ample super quick memory & storage, plus a fast-charging battery</li>
                                <li>Enjoy lightning-quick Intel® Thunderbolt™ 4.0 & PCIe SSD storage technology</li>
                                <li>Ultraportable and durable, with a choice of brilliant OLED displays</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="orderButtons" >
                    <form action="product3.php" method="POST">
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
        $query = "SELECT * FROM `products` WHERE id = 3";
        $product = mysqli_query($conn, $query);
        $quantitydraft = $_POST['quantity'];
        if(mysqli_num_rows($product)){
            $row = mysqli_fetch_assoc($product);
            $name = $row['product_Name'];
            $price = $row['product_price'];
            $image = $row['product_image'];
        }
        try{
            $cart = "INSERT INTO `cart` VALUES ('3', '$image', '$name', '$price', '$quantitydraft')";
            $query2 = mysqli_query($conn, $cart);
        }
        catch(mysqli_sql_exception){
            $cart = "UPDATE `cart` SET quantity = quantity + '$quantitydraft' WHERE id = 3";
            $query2 = mysqli_query($conn, $cart);
        }
    }
?>
</body>
</html>