<?php

session_start();

require_once ('./DataBase.php');
require_once ('component.php');

$database = new CreateDb("Sebex", "Produse");

if(isset($_POST['add']))
{
    if(isset($_SESSION['cart']))
    {
        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id))
        {
            echo "<script> alert('Produsul este deja în coș!')</script>";
            echo "<script> window.location = 'index.php'</script>";
        }
        else
        {
            $count = count($_SESSION['cart']);
            $item_array = array('product_id' => $_POST['product_id']);

            $_SESSION['cart'][$count] = $item_array;
        }
    }
    else
    {
        $item_array = array('product_id' => $_POST['product_id']);

        $_SESSION['cart'][0] = $item_array;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toate produsele - Sebex music</title>
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

    <main>
        <header class="header-2">
            <ul class="indicator">
                <li data-filter="all" class="active"><a href="#">Toate produsele</a></li>
                <li data-filter="Chitari acustice"><a href="#">Chitări acustice</a></li>
                <li data-filter="Mixere"><a href="#">Mixere</a></li>
                <li data-filter="Casti"><a href="#">Căști DJ</a></li>
                <li data-filter="Microfoane"><a href="#">Microfoane</a></li>
                <li data-filter="Sintetizatoare"><a href="#">Sintetizatoare</a></li>
                <li data-filter="Boxe active"><a href="#">Boxe active</a></li>
                <li data-filter="Tobe"><a href="#">Tobe</a></li>
            </ul>
        </header>

        <div class="small-container">
            <ul class="row">
                <?php
                $result = $database->getData();
                while($row = mysqli_fetch_assoc($result))
                {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_category'], $row['id'], $row['id_page']);
                }
                ?>
            </ul>
        </div>
    </main>

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
    
<!------------- JavaScript Meniu interactiv ----------->
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

<script type="text/javascript" src="Categorii.js"></script>