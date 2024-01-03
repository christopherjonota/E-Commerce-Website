<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCTec</title>
    <link rel="stylesheet" href= "css/index.css">
</head>
<?php 
$UN = 'Christopher';
$PS = 'Jonota';
?>
<body>
    <div class="container" >
        <?php 
        include('navigationBar.php');
        ?>
        <div class="banner" >
            <div class="ban" >
                <h1>Welcome <?php echo "$UN";?>!!</h1><br><br>
                <h3>NEW ARRIVAL</h3>
                <h2>LAPTOPS</h2>
                <h4>GREAT PERFORMCE AND GREAT DESIGN</h4>
                <h5>Browse Now!</h5>
                <br>
                <form action="index.php" method="post" >
                    <input type="text" name="search" placeholder="Search the brand of the product you want" >
                    <button type="submit" name="submit" ><img src="images\magnifying-glass.png" alt=""></button>
                </form>
            </div>
        </div>
    </div>
    <div class="con1" >
        <div class="row1" id="row1" <?php $lenovo="lenovo"; ?>>
            <div class="box" onclick="location.href='product1.php'" >
                <img src="images/img1.png" alt="">
                <h3>ThinkPad X1 Carbon Gen 11 (14″ Intel)</h3><br>
                <h4>₱90,239.64</h4>
            </div>
            <div class="box" onclick="location.href='product2.php'">
                <img src="images/img2.png" alt="">
                <h3>Legion 5i (15'', Gen 7)</h3><br>
                <h4>₱79,995.00</h4>
            </div>
            <div class="box" onclick="location.href='product3.php'">
                <img src="images/img3.png" alt="">
                <h3>IdeaPad Flex 5i (14", Gen 8)</h3><br>
                <h4>₱52,245.26</h4>
            </div>
            <div class="box" onclick="location.href='product4.php'">
                <img src="images/img4.png" alt="">
                <h3>Yoga 6 (13", 8)</h3><br>
                <h4>₱45,587.55</h4>
            </div>
        </div>
        <div class="row2" id="row2"<?php $acer="acer"; ?>>
            <div class="box" onclick="location.href='product5.php'">
                <img src="images/img5.png" alt="">
                <h3>PREDATOR TRITON 14</h3><br>
                <h4>₱111,840.44</h4>
            </div>
            <div class="box" onclick="location.href='product6.php'">
                <img src="images/img6.png" alt="">
                <h3>Nitro 16 AMD</h3><br>
                <h4>₱78,288.14</h4>
            </div>
            <div class="box" onclick="location.href='product7.php'">
                <img src="images/img7.png" alt="">
                <h3>Aspire 7 Intel</h3><br>
                <h4>₱55,919.94</h4>
            </div>
            <div class="box" onclick="location.href='product8.php'">
                <img src="images/img8.png" alt="">
                <h3>Acer Chromebook 314 - <br>CB314-3H-C41F</h3><br>
                <h4>₱19, 571.62</h4>
            </div>
        </div>
        <div class="row3" id="row3" <?php $asus="asus"; $huawei = "huawei"; ?>>
            <div class="box" onclick="location.href='#'">
                <img src="images/img9.png" alt="">
                <h3>HUAWEI MateBook D 15 (Mystic Silver)</h3><br>
                <h4>₱29,999.00</h4>
            </div>
            <div class="box" onclick="location.href='#'">
                <img src="images/img10.png" alt="">
                <h3>ASUS Zenbook Pro 14 OLED UX6404VV-P4072WS</h3><br>
                <h4>₱139,995.00</h4>
            </div>
            <div class="box" onclick="location.href='#'">
                <img src="images/img11.png" alt="">
                <h3>ExpertBook B1 B1500</h3><br>
                <h4>₱50,000.00</h4>
            </div>
            <div class="box" onclick="location.href='#'">
                <img src="images/img12.png" alt="">
                <h3>ROG Strix G17 G713RC-HX073W</h3><br>
                <h4>₱76,945.00</h4>
            </div>
        </div>
        <div class="row4" id="row4" <?php $asus="asus"; ?>>
            <div class="box" onclick="location.href='#'">
                <img src="images/img13.png" alt="">
                <h3>ROG Zephyrus G14 GA401QC-K2141W</h3><br>
                <h4>₱74,995.00</h4>
            </div>
            <div class="box" onclick="location.href='#'">
                <img src="images/img14.png" alt="">
                <h3>VivoBook 16 M1605YA-MB155WS</h3><br>
                <h4>₱35,995.00</h4>
            </div>
            <div class="box" onclick="location.href='#'">
                <img src="images/img15.png" alt="">
                <h3>ROG Zephyrus M16 GU604VI-N4085WS</h3><br>
                <h4>₱169,995.00</h4>
            </div>
            <div class="box" onclick="location.href='#'">
                <img src="images/img16.png" alt="">
                <h3>ROG Flow X16 (2022)</h3><br>
                <h4>₱164,995.00</h4>
            </div>
        </div>
    </div>
<footer>
    <p>&copy; Created by Christopher Jonota from SBIT-1C</p>
    <p>All brands included on this website are being used for educational purposes only</p>
</footer>
</body>
</html>
<?php 
if (isset($_POST['submit'])){
    $search = strtolower($_POST['search']); 
    trim($search);//trim - removes the whitespaces
    if(!empty($search)){
        switch($search){
            case $lenovo:
                echo "<script>window.location.href = '#row1';</script>";
                break;
            case $acer:
                echo "<script>window.location.href = '#row2';</script>";
                break;
            case $huawei:
                echo "<script>window.location.href = '#row3';</script>";
                break;
            case $asus:
                echo "<script>window.location.href = '#row4';</script>";
                break;
            default:
                echo "<script> alert('The brand you searched is not available at the moment')</script>";
        }
    }
}
?>