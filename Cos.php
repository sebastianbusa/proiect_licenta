<?php

session_start();

require_once ("DataBase.php");
require_once ("component.php");

$db = new CreateDb("Sebex", "Produse");

if (isset($_POST['remove'])){
    if($_GET['action'] == 'remove')
    {
        foreach ($_SESSION['cart'] as $key => $value)
        {
            if($value["product_id"] == $_GET['id'])
            {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Produsul a fost eliminat!')</script>";
                echo "<script>window.location = 'Cos.php'</script>";
            }
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coșul meu - Sebex music</title>
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
        <a href="Cos.php"><img src="imagines/Cart.png" width="40px" height="40px">
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


<!---------- Detalli cos cumparaturi ----------->

<div class="small-container cart-page">


    <table>

        <tr>

            <th>Produse</th>
            <th>Cantitate</th>
            <th>Preț</th>
        </tr>
        <tr>
            <td>
            <?php

            $total = 0;
            if (isset($_SESSION['cart'])) {
                $product_id = array_column($_SESSION['cart'], 'product_id');

                $result = $db->getData();
                while ($row = mysqli_fetch_assoc($result)) {
                    foreach ($product_id as $id) {
                        if ($row['id'] == $id) {
                            cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
                            $total = $total + (int)$row['product_price'];
                        }
                    }
                }
            }

            ?>
            </td>
        </tr>

    </table>

    <div class="total-price">

        <table>

            <tr>

                <td><?php
                    if (isset($_SESSION['cart'])){
                        $count  = count($_SESSION['cart']);
                        echo "<h4>Preț ($count obiecte)</h4>";
                    }else{
                        echo "<h4>Preț (0 obiecte)</h4>";
                    }
                    ?></td>
                <td>&euro; <?php echo $total; ?></td>
            </tr>

            <tr>

                <td><h4>Taxa transport</h4></td>
                <td>GRATUIT</td>
            </tr>

            <tr>

                <td><h4>Total</h4></td>
                <td>&euro; <?php echo $total; ?></td>
            </tr>

        </table>

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

</body>
</html>