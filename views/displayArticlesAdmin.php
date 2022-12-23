<?php
/**
 * @file displayArticlesAdmin.php
 * @brief file description
 * @author Created by Pablo-Fernando.ZUBIE
 * @version 15.12.2022
 */
$title = "capitalisme";

ob_start();// stocke dans une variable tampon





?>
    <body class="animsition">


    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">

                            <th class="column-1">Article</th>
                            <th class="column-2">Photo</th>
                            <th class="column-2">Modèle</th>
                            <th class="column-2">Longueur</th>
                            <th class="column-2">Prix a l'unité</th>
                            <th class="column-2">Quantité</th>

                            <th class="column-2"><a href="index.php?action=create"><button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Ajouter
                                    </button></a>
                            </th>

                        </tr>
<?php foreach (@$articles as $article) :
   if($article['active']==1) {

      ?>
                        <tr class="table-row">
                            <td class="column-1"><?=$article['code'];?></td>
                            <td class="column-2"><div class="cart-img-product b-rad-4 o-f-hidden">
                                    <img src="<?=$article['photo'];?>" alt="IMG-PRODUCT">
                                </div></td>
                            <td class="column-2"><?=$article['model'];?></td>
                            <td class="column-2"><?=$article['snowLength'];?></td>
                            <td class="column-2"><?=$article['price'];?></td>
                            <td class="column-2"><?=$article['qtyAvailable'];?></td>
                            <td class="column-2">
                                <a href="index.php?action=delete&code=<?=$article['code'];?>" >
                                    <button  class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    <img src="views/content/images/icons/bin2.png" alt="delete">
                                    </button></a><br>
                                <a href="index.php?action=update&code=<?=$article['code'];?>">
                                    <button  class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                        <img src="views/content/images/icons/pencil2.png" alt="update">
                                    </button></a>
                            </td>
                        </tr>
<?php } endforeach; ?>

                    </table>
                </div>
            </div>




        </div>
    </section>
    </body>
<?php

$content = ob_get_clean();
require 'gabarit.php';

?>