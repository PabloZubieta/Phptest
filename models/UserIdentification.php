<?php
/**
 * @file UserIdentification.php
 * @brief file description
 * @author Created by Pablo-Fernando.ZUBIE
 * @version 20.12.2022
 */
function getUserIdentification($email){
    $userQuery = 'SELECT id, userHashPsw, userType FROM users WHERE userEmailAddress = "'.$email.'";';

    require_once 'models/dbConnector.php';
    return executeQuerySelect($userQuery);
}
function userAdd($password,$email){
    $userQuery = 'INSERT INTO user (userEmailAddress, userHashPsw, userType) VALUES ("'.$email.'","'.$password.'",0);';

    require_once 'models/dbConnector.php';
    return executeQueryInsert($userQuery);
}
function getUserExistance($email){
    $userQuery = 'SELECT id FROM user WHERE userEmailAddress = "'.$email.'";';

    require_once 'models/dbConnector.php';
    return executeQuerySelect($userQuery);
}
function matchingPassword(){

}