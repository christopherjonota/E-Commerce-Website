<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: Georgia;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    background: url('images/bg1.jpg') no-repeat;
    background-size: cover;
    background-position: center;
    min-height: 100vh;
}
.container{
    display: flex;
    flex-direction: column;
    align-items: center;
    color: whitesmoke;
    width: 400px;
    height: 400px;
    background-color: transparent;
    backdrop-filter: blur(15px);
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 25px;
}
.container h1, form{
    margin-top: 6%;
}
form{
    width: 80%;
    height: 100%;
}
.user{
    border: 2px solid rgba(255,255,255,0.7);
    border-radius: 25px;
    padding-top: 8px;
    padding-bottom: 5px;
    margin-bottom: 20px;
    height: 70px;
}
.us{
    margin: auto;
    height: 40px;
    width: 90%;
    display: flex;
    align-items: center;
    border-bottom: 2px solid rgba(255,255,255,0.7);
}
label{
    margin-left: 20px;
}
img{
    margin-left: 10px;
    margin-right: 10px;
    height: 50%;
}
input{
    height: 20px;
    width: 100%;
    background: transparent;
    border: none;
    outline: none;
    color: white;
    font-size: 16px;
}
input::placeholder{
    color: white;
    color: rgba(255,255,255,0.5);
}
.container button{
    position: relative;
    display: block;
    margin-left: auto;
    margin-right: auto;
    cursor: pointer;
    height: 45px;
    width: 60%;
    border-radius: 18px;
    outline: none;
    border: none;
}
button:hover{
    background-color: #0174BE;
    transition: 0.3s;
}
.container #h4{
    text-align: right;
    margin-top: 10px;
    margin-bottom: 10px;
}
</style>
<?php
$UN = 'Christopher';
$PS = 'Jonota';
if (isset($_POST['submit'])){
    $username = trim($_POST['username']); //trim - removes the whitespaces
    $password = trim($_POST['password']);

    if(empty($username) || empty($password)){
        echo "<script> alert('Please input username/ password'); </script>";
    }
    elseif($username != $UN || $password != $PS){
        echo "<script> alert('Incorrect username/ password'); </script>";
    }
    else{
        header ("Location: index.php");
    }
}
?>
<body>
    <div class="container">
        <h1><?php echo "LOGIN";?></h1>
        <form action="login.php" method="post">
            <div class="user" >
                <label for=""><?php echo "Username";?></label><br>
                <div class="us" >
                    <img src="images/user.png" alt="" >
                    <input type="text" name="username" placeholder="Type your username"><br>
                </div>
            </div>
            <div class="user" >
                <label for=""><?php echo "Password";?></label><br>
                <div class="us" >
                    <img src="images/padlock.png" alt="">
                    <input type="password" name="password" id="" placeholder="Type your password" ><br>
                </div>
            </div>
            <button type="submit" name="submit" ><b><?php echo "LOGIN";?></b></button>           
        </form>
        <span id="h4" ><h4>Don't Have an Account Yet? <a href="register.php">Register Here</a></h4></span>
    </div>
</body>
</html>