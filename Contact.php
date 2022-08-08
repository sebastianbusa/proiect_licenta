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

    </div>




    <section class="contact">
        <div class="content">
            <h2>Contactează-ne</h2>
            <p>Pentru orice informație suplimentară sau întrebare legată de noi sau despre produsele noastre, te rugăm să ne contactezi prin una din urmatoarele metode.</p>
        </div>
        <div class="container-2">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text"></div>
                    <h3>Adresă</h3>
                    <p>Aleea Tomis numărul 5, <br>Arad, Arad, <br>Bloc X2</p>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text"></div>
                    <h3>Telefon</h3>
                    <p>0755617203</p>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text"></div>
                    <h3>E-mail</h3>
                    <p>busa.sebastian6@gmail.com</p>
                </div>
            </div>

            <div class="contactForm">
                <form onsubmit="sendEmail(); reset(); return false;" method="POST">
                    <h2>Trimite-ne un mesaj</h2>
                    <div class="inputBox">
                        <input type="text" name="nume" id="nume" required>

                        <span>Numele întreg</span>
                    </div>

                    <div class="inputBox">
                        <input type="email" name="email" id="email" required>
                        <span>E-mail</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="subiect" id="subiect" required>
                        <span>Subiect</span>
                    </div>

                    <div class="inputBox">
                        <textarea name="mesaj" id="mesaj" required></textarea>
                        <span>Scrie un mesaj...</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="btn" value="Trimite">
                    </div>
                </form>
            </div>
        </div>

    </section>



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

</div>

<!------------- JavaScript pentru meniu ----------->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        }
        else {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>



<script src="https://smtpjs.com/v3/smtp.js"></script>


</body>

<script>
    function sendEmail() {
        Email.send({
            SecureToken: "28c5665e-6457-4b7d-a490-418385631e65",
            To: "busa.sebastian6@gmail.com",
            From: document.getElementById("email").value,
            Subject: document.getElementById("subiect").value,
            Body: "Nume: " + document.getElementById("nume").value
                + "<br> Email: " + document.getElementById("email").value
                + "<br> Subiect: " + document.getElementById("subiect").value
                + "<br> Mesaj: " + document.getElementById("mesaj").value
        }).then(
            message => alert("Mesajul a fost trimis cu succes!")
        );
    }
</script>

</html>
