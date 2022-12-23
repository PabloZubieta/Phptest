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
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="code" placeholder="<?php if(isset($value['code'])){
                                echo $value['code'];
                            }
                            else{
                                echo "Code";
                            }
                            ?>" required>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="brand" placeholder="<?php if(isset($value['brand'])){
                                echo $value['brand'];
                            }
                            else{
                                echo "Marque";
                            }
                            ?>" required>
						</div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="model" placeholder="<?php if(isset($value['model'])){
                                echo $value['model'];
                            }
                            else{
                                echo "Modèle";
                            }
                            ?>" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="snowLength" placeholder="<?php if(isset($value['snowLength'])){
                                echo $value['snowLength'];
                            }
                            else{
                                echo "Longueur du Snow";
                            }
                            ?>" required>
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="price" placeholder="<?php if(isset($value['price'])){
                                echo $value['price'];
                            }
                            else{
                                echo "Prix";
                            }
                            ?>" required>
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="qtyAvailable" placeholder="<?php if(isset($value['qtyAvailable'])){
                                echo $value['qtyAvailable'];
                            }
                            else{
                                echo "Quantité disponible";
                            }
                            ?>" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="description" placeholder="<?php if(isset($value['description'])){
                                echo $value['description'];
                            }
                            else{
                                echo "Description";
                            }
                            ?>" required>
                        </div>
                        <div >
                            <span><input type="radio"  name="audience" value="Femme" required>
                            <label for="css">Femme</label><br></span>
                            <span><input type="radio"  name="audience" value="Homme">
                            <label for="html">Homme</label><br></span>
                            <span><input type="radio"  name="audience" value="Enfant">
                            <label for="javascript">Enfant</label></span>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="descriptionFull" placeholder="<?php if(isset($value['descriptionFull'])){
                                echo $value['descriptionFull'];
                            }
                            else{
                                echo "Description détaillée";
                            }
                            ?>">
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="photo" placeholder="<?php if(isset($value['photo'])){
                                echo $value['photo'];
                            }
                            else{
                                echo "chemin de la photo";
                            }
                            ?>">
                        </div>
                        <?php if($_GET['action']=="update"){?>
                            <div >
                                <label >en vente</label><br></span>
                            <span><input type="radio"  name="active" value="1" required>
                            <label for="css">oui</label><br></span>
                                <span><input type="radio"  name="audience" value="0">
                            <label for="html">non</label><br></span>

                            </div>
                            <?php } ?>

						<input type="submit" value="Ajouter un Snow" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4"><br>
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