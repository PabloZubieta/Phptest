<?php
/**
 * @file index.php
 * @brief one file to rule them all
 * @author Created by Pablo Zubieta
 * @version 18.11.22
 */


require "controllers/navigation.php"; //home and error controller
require "controllers/users.php";
require "controllers/articles.php";

session_start();
if(isset($_GET['action'])){
    $action = $_GET['action'];
    //rooter
    switch ($action){
        case 'delete':
            deleteArticle($_GET['code']);
            break;
        case 'update':
            updateArticle($_GET['code'],$_POST);
            break;
        case 'create':
            createArticle($_POST);
            break;
        case 'displayarticleadmin':
            displayArticleAdmin();
            break;

        case 'displayarticledetail':
            displayArticleDetail($_GET['code']);
            break;
        case 'displayarticle':
            displayArticles();
            break;
        case 'try_log':
            try_log();
            break;
        case 'login':
            login($_POST);
            break;

        case 'home':
            home();
            break;

        default:
            lost();

    }


}else{
    home();
}