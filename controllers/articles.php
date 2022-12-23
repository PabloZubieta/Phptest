<?php
/**
 * @file articles.php
 * @brief file description
 * @author Created by Pablo-Fernando.ZUBIE
 * @version 02.12.2022
 */
function displayArticles(){
    try{
        require_once "models/articlesManager.php";
        $articles = getArticles();
    }   catch (ModelDataBaseException $ex){
        $articleErrorMessage = "Nous rencontrons des problèmes technique pour afficher les produits";
    } finally {
        require "views/articles.php";
    }
}
function displayArticleDetail($code){
    try{
        require_once "models/articlesManager.php";
        $articledetail = getArticleDetail($code);
    }   catch (ModelDataBaseException $ex){
        $articleErrorMessage = "Nous rencontrons des problèmes technique pour afficher les produits";
    } finally {
        require "views/articlesdetails.php";
    }
}
function displayArticleAdmin(){
    try{
        require_once "models/articlesManager.php";
        $articles = getArticles();
    }   catch (ModelDataBaseException $ex){
        $articleErrorMessage = "Nous rencontrons des problèmes technique pour afficher les produits";
    } finally {
        require "views/displayArticlesAdmin.php";
    }
}
function deleteArticle($code){
    try{
        require_once "models/articlesManager.php";
        removeArticle($code);
    }   catch (ModelDataBaseException $ex){
        $articleErrorMessage = "Nous rencontrons des problèmes technique pour afficher les produits";
    } finally {
        require "views/displayArticlesAdmin.php";
    }
}
function updateArticle($code,$value){
    try{
        require_once "models/articlesManager.php";
        updateThisArticle($code,$value);
    }   catch (ModelDataBaseException $ex){
        $articleErrorMessage = "Nous rencontrons des problèmes technique pour afficher les produits";
    } finally {
        require "views/addArticle.php";
    }
}
function createArticle($value){
    try{
        if(isset($_POST)){
            require_once "models/articlesManager.php";
            createNewArticle($value);
        }

    }   catch (ModelDataBaseException $ex){
        $articleErrorMessage = "Nous rencontrons des problèmes technique pour afficher les produits";
    } finally {
        require "views/addArticle.php";
    }
}
