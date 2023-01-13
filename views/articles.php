<?php
/**
 * @file articles.php
 * @brief File description
 * @author Tristan Barras
 * @version 02.12.2022
 */

$title = "merchantile";

ob_start();// stocke dans une variable tampon
?>
<div class="container">
    <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
        <div class="row">
<?php foreach (@$articles as $article) :?>
            <?php if($article['active']==1){?>


        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
            <!-- Block2 -->
            <div class="block2">
                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                    <img src="<?=$article['photo'];?>" alt="IMG-PRODUCT">

                    <div class="block2-overlay trans-0-4">
                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                        </a>

                        <div class="block2-btn-addcart w-size1 trans-0-4">
                            <!-- Button -->
                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="block2-txt p-t-20">
                    <a href="index.php?action=displayarticledetail&code=<?=$article['code'];?>" class="block2-name dis-block s-text3 p-b-5">
                        <?=$article['code'];?> - <?=$article['brand'];?> - <?=$article['model'];?>
                    </a>

                    <span class="block2-price m-text6 p-r-5">
                         Disponibility : <?=$article['qtyAvailable'];?> <br>
									</span>
                    <span class="block2-price m-text6 p-r-5">
                        CHF : <?=$article['price'];?>
									</span>
                </div>
            </div>
        </div>




<?php }
?>
<?php endforeach; ?>
        </div>
    </div>
</div>
<?php

$content = ob_get_clean();
require 'gabarit.php';

?>
