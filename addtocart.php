<?php 
include('navigationBar.php');
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
    min-height: 100vw;
}
.container{
    display: flex;
    flex-direction: column;
    background: url('images/pic1.jpg');
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
    height: 220px;
}
.tablecontainer table tbody tr td {
    height: 150px;
}
.tablecontainer table tbody tr td img{
    height: 100%;
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
    margin-top: 40px;
    margin-bottom: 10px;
    align-items: center;
    background-color:peachpuff;
    height: 100px;
    width: 98%;
}
.table_bottom h3{
    text-align: center;
    background-color:coral;
    width: 200px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 20px;
    padding-bottom: 20px;
    margin-right: 300px;
    margin-left: 300px;
    border-radius: 10px;
}
.table_bottom a{
    display: flex;
    background-color: rgb(234, 179, 108);
    margin-left: 10px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 20px;
    padding-bottom: 20px;
    border-radius: 10px;
    text-decoration: none;
    color: rgb(40, 56, 56);
}
.table_bottom a:hover{
    display: flex;
    background-color: rgb(234, 152, 44);
    text-decoration: none;
}
.deleteall{
    height: 20px;
    width: 95%;
    display: flex;
    justify-content: left;
}
.deleteall input{
    height: 50px;
    width: 80px;
    background-color:rgb(216, 79, 79);
}
.deleteall input:hover{
    transition: 0.3s;
    cursor: pointer;
    background-color:rgb(222, 54, 54);
}
</style>
<body>
    <div class="container" >
        <div class="con1" >
            <div class="tablecontainer" > 
                <table>
                    <thead>
                        <th id="product_table" >Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        <?php 
                        $display_product = mysqli_query($conn, "SELECT * FROM `cart`");
                        $grandtotal = 0;
                        if(mysqli_num_rows($display_product)){
                            
                            while($row=mysqli_fetch_assoc($display_product)){
                                $price = $row['price'];
                                $quantity = $row['quantity'];
                                $id = $row['id'];
                            ?>
                            <tr>
                                <td><img src="images/<?php echo $row['product_image']?>" alt=""><br><?php  echo $row['product_name'] ?></td>
                                <td>₱<?php echo $price ?></td>
                                <td>
                                <form action="addtocart.php" method="post" >
                                <input type="number" name="quantity" id="quantity" min="1" size="10" value="<?php echo $quantity ?>">
                                <br> <input type="submit" name="submit" value="Update" class="submit">
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
                                <td>
                                    <a href="delete.php?delete=<?php echo $row['id']?>" onclick="return confirm('Are you sure you want to delete this product')">Delete</a>
                                </td>
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
                        <a href="index.php"> Continue Shopping </a>
                        <h3>Total Amount: ₱<?php echo $grandtotal ?></h3>
                        <a href="checkout.php">Proceed To Checkout</a>
                </div>
                <div class="deleteall" >
                    <form action="addtocart.php" method="post" >
                        <input type="submit" name="deleteall" value="Delete All">
                        <?php 
                            if(isset($_POST['deleteall'])){
                                $delete = "DELETE FROM cart";
                                $query5 = mysqli_query($conn, $delete);
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