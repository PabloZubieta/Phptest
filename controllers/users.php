<?php
/**
 * @file users.php
 * @brief file description

 * @author Created by Pablo-Fernando.ZUBIE
 * @version 24.11.2022
 */
function userSign($user)
{
    try {
        require_once "models/userIdentification.php";
        $user = getUserExistance($user);

    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons des problèmes technique lors de votre connection";
    } finally {
        //require "views/login.php";

    }
    return $user;
}
function userLogin($email)
{
    try {
        require_once "models/userIdentification.php";
        $email = getUserIdentification($email);

    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons des problèmes technique lors de votre connection";
    } finally {
        //require "views/login.php";

    }
    return $email;
}
function login($loginRequest){




    if ((@$loginRequest['inputEmail']) && (@$loginRequest['inputUserPswd'])){
        require "views/home.php";

    }else{
        require "views/login.php";
    }




}


function try_log(){
    require "";



}