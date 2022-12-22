<?php
/**
 * @file users.php
 * @brief file description

 * @author Created by Pablo-Fernando.ZUBIE
 * @version 24.11.2022
 */
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