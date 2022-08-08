<?php

session_start();

require_once ('./DataBase.php');
require_once ('component.php');

$database = new CreateDb("Sebex", "Produse");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contul meu - Sebex music</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="Principal.php">
                <img src="imagines/logo_transparent.png" width="140px">
            </a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="Principal.php">Acasă</a></li>
                <li><a href="index.php">Produse</a></li>
                <li><a href="Cont.php">Contul meu</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
        <a href="Cos.php">
            <img src="imagines/Cart.png" width="40px" height="40px">
            <?php
            if(isset($_SESSION['cart']))
            {
                $count = count($_SESSION['cart']);
                echo "<span id=\"cart_count\">$count</span>";
            }
            else
            {
                echo "<span id=\"cart_count\">0</span>";
            }
            ?>
        </a>
        <img src="imagines/Menu-Logo.png" class="menu-icon" onclick="menutoggle()">
    </div>


</div>

<!----------- Cont ----------->

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="imagines/Guitar-logo.png" width="80%">
            </div>

            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Înregistrează</span>
                        <hr id="indicator">
                    </div>

                    <form id="loginForm">
                        <input type="text" placeholder="Nume de utilizator">
                        <input type="password" placeholder="Parolă">
                        <button type="submit" class="btn">Login</button>
                        <a href="">Ai uitat parola?</a>
                    </form>

                    <form id="regForm">
                        <input type="text" placeholder="Nume de utilizator">
                        <input type="email" placeholder="E-mail">
                        <input type="password" placeholder="Parolă">
                        <button type="submit" class="btn">Înregistreză-te</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>


<!---------footer ----------->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-2">
                <a href="Principal.php"><img src="imagines/logo_transparent.png"></a>

            </div>
            <div class="footer-col-3">
                <h3>Link'uri folositoare</h3>
                <ul>
                    <li>Cupoane</li>
                    <li>Blog</li>
                    <li>Politica de returnare</li>
                    <li>Aplică acum</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Urmărește-ne</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">&copy; Copyright Sebex Music</p>

    </div>

</div>

<!------------- js toggle menu ----------->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px";
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>


<!---------- js for toggle Form ---------->
<script>

    var loginForm = document.getElementById("loginForm");
    var regForm = document.getElementById("regForm");
    var indicator = document.getElementById("indicator");

    function register(){
        regForm.style.transform = "translateX(0px)";
        loginForm.style.transform = "translateX(0px)";
        indicator.style.transform = "translateX(100px)";
    }


    function login(){
        regForm.style.transform = "translateX(300px)";
        loginForm.style.transform = "translateX(300px)";
        indicator.style.transform = "translateX(0px)";
    }

</script>


</body>

</html>
