<?php
include('include/database.php');
$display_product = mysqli_query($conn, "SELECT * FROM `cart`");
if(!mysqli_num_rows($display_product)){
    echo "<script>alert('You dont have any products on your cart yet');</script>";
    header("Location: addtocart.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: Georgia;
}
body{
    display: flex;
    flex-direction: column;
    min-width: 100vh;
    min-height: 100vh;
}
.container{
    display: flex;
    flex-direction: column;
    background: url('../images/pic1.jpg');
    background-size: cover;
    background-position: center;
    width: 100%;
}
.con1{
    background-color: #776B5D;
    display: flex;
    justify-content: center;
    height: 100vw;
}
.navbar{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    background-color: rgba(119, 107, 93, 0.4);
    backdrop-filter: blur(15px);
    height: 75px;
    width: 100%;
}
.navbar h1{
    margin-left: 20px;
    color:blanchedalmond;
}
.logo{ 
    display: flex;
    align-items: center;
    justify-content: left;
    width: 48%;
    height: 100%;
}
.container .logo a img{
    height: 70px;
}
.buttons{
    display: flex;
    align-items: center;
    justify-content: right;
    width: 48%;
    height: 100%;
}
.buttons #burger a{
    text-decoration: none;
    background-color: #F3EEEA;
    border-radius: 10px;
    padding: 10px 20px 10px 20px;
    color: #776B5D;
    font-size: 16px;
}
.buttons #burger a:hover{
    background-color: #776B5D;
    color: #F3EEEA;
    transition: 0.3s;
}
.tablecontainer{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
    background-color: white;
    height: 100vw;
    width: 1200px;
}
.tablecontainer table{
    margin-top: 20px;
    height: 200px;
    width: 98%;
    text-align: center;
}
.tablecontainer table thead th{
    background-color: bisque;
    padding: 20px;

}
.tablecontainer table tbody{
    background-color: antiquewhite;
}
.tablecontainer table tbody tr  {
    height: 160px;
}
.tablecontainer table tbody tr td {
    height: 150px;
}
.tablecontainer table tbody tr td img{
    height: 80%;
}
.tablecontainer table caption{
    background-color: bisque;
    padding: 30px;
}
#quantity{
    text-align: center;
    width: 60px;
    height: 50px;
    font-size: 16px;
    border: none;
    margin-bottom: 20px;
}
.submit{
    width: 60px;
    height: 30px;
    border-radius: 10px;
    background-color: blanchedalmond;
}
.submit:hover{
    cursor: pointer;
    background-color: burlywood;
}
#product_table{
    padding: 40px;
}
.table_bottom{
    display: flex;
    flex-direction: row;
    margin-top: 10px;
    margin-bottom: 10px;
    align-items: center;
    justify-content: center;
    background-color:peachpuff;
    height: 80px;
    width: 98%;
}
.table_bottom h3{
    text-align: center;
    background-color:coral;
    width: 200px;
    height: 50px;
    padding: 10px;
    border-radius: 10px;
}
.payment{
    display: flex;
    flex-direction: column;
    width: 1180px;
    height: 320px;
    background-color: blanchedalmond;
}
.paymentMethod{
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    align-items: center;
    padding-bottom: 20px;
    border-bottom: 1px solid black;
}
.paymentMethod img{
    height: 100px;
}
.gcashNumber{
    margin-left: 20px;
}
.gcashNumber input{
    text-align: center;
    width: 200px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.placeorder{
    display: flex;
    justify-content: right;
    margin-right: 50px;
}
.placeorder input{
    padding: 18px 40px 18px 40px;
    background-color: peachpuff;
    border: none;
    border-radius: 10px;
}
.placeorder input:hover{
    background-color: coral;
    cursor: pointer;

}
</style>
<body>
    <div class="container" >
        <div class="navbar" >
            <div class = "logo">
                <a href="index.php"><img src="images/QCTech Logo.png" alt=""></a>
                <h1>CHECKOUT PAGE</h1>
            </div>           
            <div class = "buttons">
                <span id="burger"><a href="login.php">Logout</a></span>
            </div>            
        </div>
        <div class="con1" >
            <div class="tablecontainer" > 
                <table>
                    <thead>
                        <th id="product_table" >Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                    </thead>
                    <tbody>
                        <?php 
                        $display_products = mysqli_query($conn, "SELECT * FROM `cart`");
                        $grandtotal = 0;
                        if(mysqli_num_rows($display_products)){
                            
                            while($row=mysqli_fetch_assoc($display_products)){
                                $price = $row['price'];
                                $quantity = $row['quantity'];
                                $id = $row['id'];
                            ?>
                            <tr>
                                <td><img src="images/<?php echo $row['product_image']?>" alt=""><br><?php  echo $row['product_name'] ?></td>
                                <td>₱<?php echo $price ?></td>
                                <td>
                                <form action="addtocart.php" method="post" >
                                <?php echo $quantity ?>
                                </form>        
                                <?php 
                                if(isset($_POST['submit'])){
                                    $quantity = $_POST['quantity'];
                                    $sql = "UPDATE `cart` SET quantity = '$quantity' WHERE id = '$id'";
                                    $query = mysqli_query($conn, $sql);
                                }
                                $grandtotal = $grandtotal + ($price * $quantity);
                                ?>
                                </td>
                                <td>₱<?php echo $price * $quantity ?></td>
                                </tr>
                        <?php 
                            }
                        }
                        else{?>
                        <caption><h1>Your Cart is Empty</h1></caption>
                        <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
                <div class="table_bottom" >
                    <h3>Total Amount: ₱<?php echo $grandtotal ?></h3>
                </div>
                <div class="payment" >
                    <div class="paymentMethod" >
                        <h1>Payment Method:</h1>
                        <img src="images/gcash.png" alt="">
                    </div>
                    <form action="checkout.php" method="post" >
                        <div class="gcashNumber" >
                            <br><label for="gcash">Input Your Gcash Number: </label>
                            <input type="text" name="gcash" maxlength="11" minlength="11" required><br><br>
                            <label for="">Input Amount for Payment: </label>
                            <input type="number" name="payment" required>
                        </div>
                        <div class="placeorder" >
                            <input type="submit" name="placeorder" value="Place Order" onclick="location.href='index.php'">
                        </div>

                        <?php 
                        if(isset($_POST['placeorder'])){
                            $number = $_POST['gcash'];
                            $payment = $_POST['payment'];
                            if($payment < $grandtotal){
                                echo "<script>alert('Insufficient Amount, Please Try Again')</script>";
                            }
                            else{
                                $delete = "DELETE FROM cart";
                                $query5 = mysqli_query($conn, $delete);
                                echo "<script> alert('Your Order Has Been Processed'); </script>";
                            }
                            
                        }
                        ?>
                    </form> 
                </div>
            </div>
        </div>
    </div>
<?php
include('footer.php');
?>
</body>
</html>