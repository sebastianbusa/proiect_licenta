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
    <title>Detalli produs - Sebex music</title>
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


<!-------- detalii produs ------------->


<div class="small-container single-product">

    <div class="row">
        <div class="col-2">
            <img src="imagines/Product-7.jpg" width="100%" id="productImg">

            <div class="small-img-row">

                <div class="small-img-col">
                    <img src="imagines/Product-7.1.jpg" width="100%" class="small-img">
                </div>

                <div class="small-img-col">
                    <img src="imagines/Product-7.2.jpg" class="small-img">
                </div>

                <div class="small-img-col">
                    <img src="imagines/Product-7.jpg" width="100%" class="small-img">
                </div>
            </div>

        </div>
        <div class="col-2">
            <a href="index.php"><p>&#8592; Înapoi</p></a>
            <h1>Sintetizator Roland JD-XA</h1>
            <h4>&euro;1862.06</h4>
            <h3>Detaliile produsului <i class="fa fa-indent"></i></h3>
            <p>Sintetizator Roland JD-XA cu 49 de clape, cu procesor de sunet analog și digital și secțiune de synth analog SuperNATURAL, ideal pentru pasionații de muzică.</p>
        </div>
    </div>

</div>


<!---------footer ----------->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-2">
                <a href="Principal.php">
                    <img src="imagines/logo_transparent.png">
                </a>

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

<!---------- JavaScript pentru galerie ------------->

<script>

    let productImg = document.getElementById("productImg");
    let smallImg = document.getElementsByClassName("small-img");
    smallImg[0].onclick = function () {
        productImg.src = smallImg[0].src;
    }
    smallImg[1].onclick = function () {
        productImg.src = smallImg[1].src;
    }
    smallImg[2].onclick = function () {
        productImg.src = smallImg[2].src;
    }

</script>

<!------------- JavaScript pentru meniu interactiv ------------------>

<script>
    let MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight === "0px") {
            MenuItems.style.maxHeight = "200px";
        }
        else {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>



</body>

</html>
