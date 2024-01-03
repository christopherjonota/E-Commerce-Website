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
                        <h2>Predator Triton 14</h2>
                        <div class="ratings" >
                            <h3>4.8</h3>
                            <img src="images/rating.png" alt="">
                            <h4>1.4k ratings</h4>
                            <h4>2.2k sold</h4>
                        </div>
                        <div class="price" >
                            <h1><del>₱92,768.00</del></h1>
                            <h2>₱89,999.99</h2>
                            <div class="discount" >
                                <h2>3% OFF</h2>
                            </div>
                        </div>
                        <div class="description" >
                            <h3>BEYOND PERFORMANCE</h3>
                            <ul>
                                <li>Empower your computing experience with the latest 13th Gen Intel® Core™ i7 Processor1, its advanced performance hybrid architecture, GeForce RTX™ 40 Series Graphics, and vast amounts of speedy PCIe Gen4 storage, all housed within a sleek metallic shell.</li>
                                <li>NVIDIA® GeForce RTX™ 40 Series Laptop GPUs are beyond fast for gamers and creators.</li>
                                <li>They're powered by the ultra-efficient NVIDIA Ada Lovelace architecture, which delivers a quantum leap in both performance and AI-powered graphics.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="orderButtons" >
                    <form action="product5.php" method="POST">
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
        $query = "SELECT * FROM `products` WHERE id = 5";
        $product = mysqli_query($conn, $query);
        $quantitydraft = $_POST['quantity'];
        if(mysqli_num_rows($product)){
            $row = mysqli_fetch_assoc($product);
            $name = $row['product_Name'];
            $price = $row['product_price'];
            $image = $row['product_image'];
        }
        try{
            $cart = "INSERT INTO `cart` VALUES ('5', '$image', '$name', '$price', '$quantitydraft')";
            $query2 = mysqli_query($conn, $cart);
        }
        catch(mysqli_sql_exception){
            $cart = "UPDATE `cart` SET quantity = quantity + '$quantitydraft' WHERE id = 5";
            $query2 = mysqli_query($conn, $cart);
        }
    }
?>
</body>
</html>