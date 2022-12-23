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

    $codeQuery = "SELECT code FROM snows WHERE code='".$value['code']."';";
    $query = executeQuerySelect($codeQuery)[0];
    if (isset($query)){
        return false;
    }
    $articledetailquery = "INSERT INTO snows ( code, brand, model, description, descriptionFull, audience, snowLength, price, qtyAvailable, photo, active) VALUES ('".$value['code']."', '".$value['brand']."', '".$value['model']."', '".$value['description']."', '".$value['descriptionFull']."','".$value['audience']."', ".$value['snowLength'].", ".$value['price'].", ".$value['qtyAvailable'].", '".$value['photo']."', 1);" ;

    require_once 'models/dbConnector.php';
    return executeQueryinsert($articledetailquery)[0];
}
function removeArticle($code){
    $articledetailquery = "UPDATE snows SET  snows.active = 0 WHERE code='".$code."';" ;

    require_once 'models/dbConnector.php';
    return executeQueryUpdate($articledetailquery)[0];
}
function updateThisArticle($code,$value){

    if (isset($value)){
        $articledetailquery = "UPDATE snows SET brand = '".$value['brand']."', model= '".$value['model']."', description= '".$value['description']."', descriptionFull= '".$value['descriptionFull']."',audience='".$value['audience']."' , snowLength= ".$value['snowLength'].", price =".$value['price'].", qtyAvailable = ".$value['qtyAvailable'].", photo ='".$value['photo']."', active = ".$value['brand']." WHERE code='".$code."';" ;

        require_once 'models/dbConnector.php';
        return executeQueryUpdate($articledetailquery)[0];

    }
    $selctedarticle = "SELECT code, brand, model, description, descriptionFull, audience, snowLength, price, qtyAvailable, photo, active FROM snows WHERE code='".$code."';" ;
    require_once 'models/dbConnector.php';
    return executeQuerySelect($selctedarticle);


}