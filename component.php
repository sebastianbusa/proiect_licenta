<?php

function component($NumeleProdusului, $PretulProdusului, $ImagineaProdusului, $Categoria, $IdProdus, $IdPagina){
    $element = "
                    <li data-category=\"\" class=\"col-4\">
                    <form action=\"index.php\" method=\"post\">
                    <a href=\"$IdPagina\"><img src=\"$ImagineaProdusului\" alt=\"Image1\" width=\"220px\" height=\"200px\"></a>
                    <a href=\"$IdPagina\"><h4>$NumeleProdusului</h4></a>
                    <div class=\"rating\">
                        <i class=\"fa fa-star\"></i>
                        <i class=\"fa fa-star\"></i>
                        <i class=\"fa fa-star\"></i>
                        <i class=\"fa fa-star\"></i>
                        <i class=\"fa fa-star\"></i>
                    </div>
                    <p>&euro;$PretulProdusului</p>
                    <strong>$Categoria</strong>
                    <button type=\"submit\" class=\"btn-2\" name=\"add\">Adaugă în coș</button>
                    <input type='hidden' name='product_id' value='$IdProdus'>
                    </form>
                    </li>
";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"Cos.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
    <tr>
        <td>
                <div class=\"cart-info\">
                    <img src=\"$productimg\">
                    <div>
                        <p>$productname</p>
                        <small>Preț: &euro; $productprice</small>
                        <br>
                        <button type=\"submit\" class=\"btn-3\" name=\"remove\">Șterge</button>
                    </div>
                </div>

            </td>
            <td><input type=\"number\" value=\"1\"></td>
            <td>&euro; $productprice</td>
            
    </tr>
    </form>
    ";
    echo  $element;
}



