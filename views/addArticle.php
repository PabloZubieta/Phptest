<?php
/**
 * @file login.php
 * @brief file description
 * @author Created by Pablo-Fernando.ZUBIE
 * @version 24.11.2022
 */

$title = "j'te connais toi";

ob_start();// stocke dans une variable tampon
?>

<body class="animsition">

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(views/content/images/heading-pages-06.jpg);">
		<h2 class="l-text2 t-center">
Contact
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">

				<div class="col-md-12 p-b-30">
					<form class="leave-comment" action="index.php?action=<?php echo $_GET['action']?>" method="post">
						<h4 class="m-text26 p-b-36 p-t-15">
ajouter un snow
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="code" placeholder="code" <?php if(isset($value['code'])){
                                echo  'value="'.$value['code'].'"';
                            }
                            else if (isset($articleinfo)){
                                echo  'value="'.$articleinfo['code'].'"';
                            }
                            if ($_GET['action']=="update"){
                               echo "readonly";
                            }
                            ?>  required>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="brand" placeholder="Marque" <?php if(isset($value['brand'])){
                                echo 'value="'.$value['brand'].'"';
                            }
                            else if (isset($articleinfo)){
                                echo  'value="'.$articleinfo['brand'].'"';
                            }
                            ?> required>
						</div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="model" placeholder="Modèle" <?php if(isset($value['model'])){
                                echo 'value="'.$value['model'].'"';
                            }
                            else if (isset($articleinfo)){
                                echo  'value="'.$articleinfo['model'].'"';
                            }
                            ?> required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="snowLength" placeholder="Longueur du Snow" <?php if(isset($value['snowLength'])){
                                echo 'value="'.$value['snowLength'].'"';
                            }
                            else if (isset($articleinfo)){
                                echo  'value="'.$articleinfo['snowLength'].'"';
                            }

                            ?> required>
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="price" placeholder="Prix" <?php if(isset($value['price'])){
                                echo 'value="'.$value['price'].'"';
                            }
                            else if (isset($articleinfo)){
                                echo  'value="'.$articleinfo['price'].'"';
                            }

                            ?> required>
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="qtyAvailable" placeholder="Quantité disponible" <?php if(isset($value['qtyAvailable'])){
                                echo 'value="'.$value['qtyAvailable'].'"';
                            }
                            else if (isset($articleinfo)){
                                echo  'value="'.$articleinfo['qtyAvailable'].'"';
                            }

                            ?> required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="description" placeholder="Description" <?php if(isset($value['description'])){
                                echo 'value="'.$value['description'].'"';
                            }
                            else if (isset($articleinfo)){
                                echo  'value="'.$articleinfo['description'].'"';
                            }

                            ?> required>
                        </div>
                        <div >
                            <span><input type="radio"  name="audience" value="Femme" required <?php if((isset($articleinfo)&&$articleinfo['audience']=="Femme")||(isset($value['audience'])&&$value['audience']=="Femme")){?> checked<?php } ?>>
                            <label for="femme">Femme</label><br></span>
                            <span><input type="radio"  name="audience" value="Homme" <?php if((isset($articleinfo)&&$articleinfo['audience']=="Homme")||(isset($value['audience'])&&$value['audience']=="Homme")){?> checked<?php } ?>>
                            <label for="men">Homme</label><br></span>
                            <span><input type="radio"  name="audience" value="Enfant" <?php if((isset($articleinfo)&&$articleinfo['audience']=="Enfant")||(isset($value['audience'])&&$value['audience']=="Enfant")){?> checked<?php } ?>>
                            <label for="kid">Enfant</label></span>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="descriptionFull" placeholder="Description détaillée" <?php if(isset($value['descriptionFull'])){
                                echo 'value="'.$value['descriptionFull'].'"';
                            }
                            else if (isset($articleinfo)){
                                echo  'value="'.$articleinfo['descriptionFull'].'"';
                            }

                            ?>>
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="photo"  placeholder="chemin de la photo" <?php if(isset($value['photo'])){
                                echo 'value="'.$value['photo'].'"';
                            }
                            else if (isset($articleinfo)){
                                echo  'value="'.$articleinfo['photo'].'"';
                            }
                            ?>>
                        </div>
                        <?php if($_GET['action']=="update"){?>
                            <div >
                                <label >en vente</label><br></span>
                            <span><input type="radio"  name="active" value="1" required <?php if($articleinfo['active']==1){?> checked<?php } ?>>
                            <label for="css">oui</label><br></span>
                                <span><input type="radio"  name="active" value="0" <?php if($articleinfo['active']==0){?> checked<?php } ?>>
                            <label for="html">non</label><br></span>

                            </div>
                            <?php } ?>

						<input type="submit" <?php if($_GET['action']=="update"){?>value="Update un snow" <?php } ?>

                        <?php if($_GET['action']=="create"){?>value="Ajouter un Snow" <?php } ?>
                                 class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4"><br>
						<input type="reset" value="Annuler" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">

					</form>
				</div>
			</div>
		</div>
	</section>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="views/content/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="views/content/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="views/content/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="views/content/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="views/content/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
    $(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="views/content/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="views/content/js/main.js"></script>

</body>
<?php

$content = ob_get_clean();
require 'gabarit.php';

?>