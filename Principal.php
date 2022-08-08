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
    <title>Pagina principală - Sebex Music</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div class="header">
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

        <div class="row">
            <div class="col-2">
                <h1>Simte Muzica<br>La Nivel Maxim!</h1>
                <p>Muzica este o limbă care nu vorbește în cuvinte <br>Aceasta se exprimă prin emoții.</p>
                <a href="index.php" class="btn">Explorează acum &#9830;</a>
            </div>
            <div class="col-2">
                <img src="imagines/Guitar-logo.png" width="700px">
            </div>
        </div>
    </div>
</div>

<!------------- Categoriile -------------->

<div class="categories">
    <div class="small-container">
        <h2 class="title">Categorii produse</h2>
        <div class="row">
            <div class="col-3">
                <a href="index.php"><img src="imagines/Categories-5.png"></a>
            </div>
            <div class="col-3">
                <a href="index.php"><img src="imagines/Categories-6.jfif"></a>
            </div>
            <div class="col-3">
                <a href="index.php"><img src="imagines/Categories-3.png"></a>
            </div>
            <div class="col-3">
                <a href="index.php"><img src="imagines/Categories-4.png"></a>
            </div>
            <div class="col-3">
                <a href="index.php"><img src="imagines/Categories-2.png"></a>
            </div>

        </div>
    </div>
</div>

<!--------------- Produsele recomandate ---------------->

<div class="small-container">
    <h2 class="title">Produse recomandate</h2>
    <div class="row">
        <div class="col-4">
            <a href="Detalii-produs-2.php"><img src="imagines/Product-4.jpg"></a>
            <a href="Detalii-produs-2.php"><h4>Set tobe electrice Roland TD-1KPX2</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>&euro;1119.06</p>
        </div>

        <div class="col-4">
            <a href="Detalii-produs-4.php"><img src="imagines/Product-5.jpg"></a>
            <a href="Detalii-produs-4.php"><h4>Mixer DJ Pioneer DJM-V10</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>&euro;3440.35</p>
        </div>

        <div class="col-4">
            <a href="Detalii-produs-3.php"><img src="imagines/Product-6.png"></a>
            <a href="Detalii-produs-3.php"><h4>Microfon wireless Eikon EKJM</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>&euro;139.45</p>
        </div>

        <div class="col-4">
            <a href="Detalii-produs-5.php"><img src="imagines/Product-3.jpg"></a>
            <a href="Detalii-produs-5.php"><h4>Chitară acustică Flame CAG 230 BS</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>&euro;70.84</p>
        </div>
    </div>

    <!-------------- Cele mai recente produse ------------------>

    <h2 class="title">Cele mai recente produse</h2>
    <div class="row">
        <div class="col-4">
            <a href="Detalii-produs-6.php"><img src="imagines/Product-7.jpg"></a>
            <a href="Detalii-produs-6.php"><h4>Sintetizator Roland JD-XA</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>&euro;1862.06</p>
        </div>

        <div class="col-4">
            <a href="Detalii-produs-7.php"><img src="imagines/Product-8.jpg"></a>
            <a href="Detalii-produs-7.php"><h4>Mixer Behringer DDM4000</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>&euro;357.23</p>
        </div>

        <div class="col-4">
            <a href="Detalii-produs-8.php"><img src="imagines/Product-9.jpg"></a>
            <a href="Detalii-produs-8.php"><h4>Boxă activă Yamaha DBR 15</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>&euro;580.88</p>
        </div>

        <div class="col-4">
            <a href="Detalii-produs-9.php"><img src="imagines/Product-10.jpg"></a>
            <a href="Detalii-produs-9.php"><h4>CD Player Pioneer CDJ-850K</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>&euro;920,38</p>
        </div>

        <div class="col-4">
            <a href="Detalii-produs-10.php"><img src="imagines/Product-1.jpg"></a>
            <a href="Detalii-produs-10.php"><h4>Căști DJ V-Moda M-200-BK</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>&euro;333,64</p>
        </div>

        <div class="col-4">
            <a href="Detalii-produs-11.php"><img src="imagines/Product-2.jpg"></a>
            <a href="Detalii-produs-11.php"><h4>Mixer analogic Proel MQ16USB</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>&euro;495,50</p>
        </div>

        <div class="col-4">
            <a href="Detalii-produs-12.php"><img src="imagines/Product-12.jpg"></a>
            <a href="Detalii-produs-12.php"><h4>Microfon studio SE Electronics SE 2200</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>&euro;234,50</p>
        </div>

        <div class="col-4">
            <a href="Detalii-produs-1.php"><img src="imagines/Product-11.jpg"></a>
            <a href="Detalii-produs-1.php"><h4>Controller Pioneer DDJ-FLX6</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>&euro;606,57</p>
        </div>
    </div>
</div>


<!------------------ Exclusiv -------------------->

<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="imagines/Product-10.1.png" class="offer-img">
            </div>
            <div class="col-2">
                <p>Produse exclusive pe Sebex Music</p>
                <h1>Pioneer CDJ-850K</h1>
                <p>Muzica nu a sunat niciodata mai bine. CD player profesional Pioneer CDJ-850K, pentru cariera ta de DJ.</p>
                <a href="Detalii-produs-9.php" class="btn">Cumpără acum &#8594;</a>
            </div>
        </div>
    </div>
</div>

<!----------------- Branduri --------------------->

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="imagines/Logo-1.png">
            </div>
            <div class="col-5">
                <img src="imagines/Logo-2.png">
            </div>
            <div class="col-5">
                <img src="imagines/Logo-3.png">
            </div>
            <div class="col-5">
                <img src="imagines/Logo-4.png">
            </div>
            <div class="col-5">
                <img src="imagines/Logo-5.jpg">
            </div>

        </div>
    </div>
</div>

<!------------------ Footer -------------------->

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

<!------------- JavaScript pentru meniu ----------->
<script>
    let MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight === "0px")
        {
            MenuItems.style.maxHeight = "200px";
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>

</body>
</html>
