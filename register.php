<?php
    require_once 'include/database.php';

?>

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
        font-family: Cambria;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        background: url(images/bg3.jpg) no-repeat;
        min-height: 100vh;
        background-position: center;
	    background-size: cover;
    }
    .con1{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 500px;
        height: 580px;
        background: transparent;
        backdrop-filter: blur(15px);
        border: 2px solid rgba(255,255,255,0.5);
        border-radius: 25px;
    }
    .regbox{
        position: relative;
        width: 90%;
        height: 95%;
        color: white;
    }
    h1{
        text-align: center;
        margin-bottom: 5px;
    }
    hr{
        margin-bottom: 20px;
    }
    .fn{
        display: flex;
        width: 100%;
    }
    .fn input{
        width: 200px;
        margin-right: 10px;
        padding-left: 10px;
    }
    form input{
        background: transparent;
        border: solid 2px rgba(255,255,255,0.5);
        color: white;
        outline: none;
        padding-left: 10px;
        border-radius: 25px;
        margin-bottom: 8px;
        margin-top: 3px;
        height: 35px;
        width: 95%;
    }
    select{
        outline: none;
        margin-bottom: 10px;
        margin-top: 3px;
        background: transparent;
        width: 147px;
        border: none;
        height: 40px;
        border: 2px solid rgba(255,255,255,0.5);
        border-radius: 18px;
        color: #fff;
    }
    option {
	background-color: #000;
    }
    .but{
        display: flex;
        justify-content: center;
    }
    button{
        font-size: 16px;
        width: 250px;
        height: 45px;
        border-radius: 20px;
        cursor: pointer;
    }
    p{
        text-align: center;
    }
    a{
        color: #F3EEEA;
    }
</style>
<body>
    <div class="con1">
        <div class="regbox">
            <form action="include/register-inc.php" method="post">
                <h1>Registration</h1>
                <hr>
                <div class="fn" >
                    <div>
                        <label for="">First Name</label><br>
                        <input type="text" name="firstname" id="" required>
                    </div>
                    <div>
                        <label for="">Last Name</label><br>
                        <input type="text" name="lastname" id="" required>
                    </div>
                </div>
                <label for="">Birthday</label><br>
                <select name="month" id="month" >
                        <option value="" disabled selected>Month </option>
                        <option value="January">January </option>
                        <option value="February">February </option>
                        <option value="March">March </option>
                        <option value="April">April </option>
                        <option value="May">May </option>
                        <option value="June">June </option>
                        <option value="July">July </option>
                        <option value="August">August </option>
                        <option value="September">September </option>
                        <option value="October">October </option>
                        <option value="November">November </option>
                        <option value="December">December </option>
                </select>
                <select name="day" id="day" >
                        <option value="" disabled selected>Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                </select>
                <select name="year" id="year" >
                        <option value="" disabled selected>Year</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                </select>
                <br><label for="">Email</label><br>
                <input type="email" name="email" id="" placeholder="Input email" required>
                <br><label for="">Username</label><br>
                <input type="text" name="username" id="" placeholder="Input username" required>
                <br><label for="">Password</label><br>
                <input type="password" name="password" id="" placeholder="Input password" required>
                <br><label for="">Confirm Password</label><br>
                <input type="password" name="conpass" id="" placeholder="Confirm Password" required>
                <div class="but" >
                    <button type="submit" name="submit" >Submit</button>
                </div>
                <p>Already Have an Account? <a href="login.php">Login Here</a></p>
        </form></div> 
    </div>
</body>
</html>
<?php
    require_once 'include/register-inc.php';
?>