<?php
/**
 * @file articlesManager.php
 * @brief file description
 * @author Created by Pablo-Fernando.ZUBIE
 * @version 02.12.2022
 */
function getArticles(){
    $snowQuery = 'SELECT code, brand, model, snowLength, price, qtyAvailable, photo, active FROM snows';

    require_once 'models/dbConnector.php';
    return executeQuerySelect($snowQuery);
}

function getArticleDetail($code){
    $articledetailquery = "SELECT code, brand, model, description, descriptionFull, snowLength, price, qtyAvailable, photo, active FROM snows WHERE code='".$code."';" ;

    require_once 'models/dbConnector.php';
    return executeQuerySelect($articledetailquery)[0];
}

function createNewArticle($value){
    $articledetailquery = "INSERT INTO snows ( code, brand, model, description, descriptionFull, snowLength, price, qtyAvailable, photo, active) VALUES (".$value['code'].", ".$value['brand'].", ".$value['model'].", ".$value['description'].", ".$value['descriptionFull'].", ".$value['snowLength'].", ".$value['price'].", ".$value['qtyAvailable'].", ".$value['photo'].", 1);" ;

    require_once 'models/dbConnector.php';
    return executeQueryinsert($articledetailquery)[0];
}
function removeArticle($code){
    $articledetailquery = "UPDATE snows SET  snows.active = 0 WHERE code='".$code."';" ;

    require_once 'models/dbConnector.php';
    return executeQueryUpdate($articledetailquery)[0];
}
function updateThisArticle($code,$value){
    $articledetailquery = "UPDATE snows SET brand = '".$value['brand']."', model= '".$value['brand']."', description= '".$value['brand']."', descriptionFull= '".$value['brand']."', snowLength= ".$value['brand'].", price =".$value['brand'].", qtyAvailable = ".$value['brand'].", photo ='".$value['brand']."', snows.active = ".$value['brand']." WHERE code='".$code."';" ;

    require_once 'models/dbConnector.php';
    return executeQueryUpdate($articledetailquery)[0];
}