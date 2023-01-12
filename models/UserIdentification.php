<?php
/**
 * @file UserIdentification.php
 * @brief file description
 * @author Created by Pablo-Fernando.ZUBIE
 * @version 20.12.2022
 */
function getUserIdentification($email){
    $userQuery = 'SELECT id, userHashPsw, password, admin FROM users WHERE userEmailAddress = "'.$email.'";';

    require_once 'models/dbConnector.php';
    return executeQuerySelect($userQuery);
}
function userAdd($user,$password,$email){
    $date= '"'.date("Y-m-d").'"';
    $userQuery = 'INSERT INTO user (username, password, email_address, registration_date ,rank_id) VALUES ("'.$user.'","'.$password.'","'.$email.'",'.$date.',1);';

    require_once 'models/dbConnector.php';
    return executeQueryInsert($userQuery);
}
function getUserExistance($user){
    $userQuery = 'SELECT id FROM user WHERE username = "'.$user.'";';

    require_once 'models/dbConnector.php';
    return executeQuerySelect($userQuery);
}