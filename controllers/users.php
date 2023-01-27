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
function login($values)
{
    try {
        if(isset($values["inputUserEmail"])&&isset($values["inputUserPswd"])) {
            require_once "models/userIdentification.php";
            $user = getUserIdentification($values["inputUserEmail"]);

            if (isset($user["userHashPsw"])) {
                if (password_verify($values["inputUserPswd"], $user["userHashPsw"])) {
                    $_SESSION["connected"] = $user["id"];
                    $_SESSION["userType"] = $user["userType"];
                    $_SESSION["email"] = $values["inputUserEmail"];

                    require "views/home.php";
                } else {
                    $error = "wrong password";
                    require "views/login.php";
                }

            } else{
                $error = "no user register for this address";
                require "views/login.php";
            }

        }
        else{

            require "views/login.php";
        }


    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons des problèmes technique lors de votre connection";
    } finally {


    }

}
function oldlogin($loginRequest){




    if ((@$loginRequest['inputEmail']) && (@$loginRequest['inputUserPswd'])){
        require "views/home.php";

    }else{
        require "views/login.php";
    }




}


function try_log(){
    require "";



}