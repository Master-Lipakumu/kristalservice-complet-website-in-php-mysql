<?php
    session_start();
    $dbhost = 'sql205.epizy.com';
    $dbname = 'epiz_22726529_tchat';
    $dbuser = 'epiz_22726529';
    $dbpswd = 'et7nEi2Kz';

    try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOexception $e){
        die("Une erreur est survenue lors de la connexion a la base de donnees");
    }


    function isLogged(){
        if(isset($_SESSION['epiz_22726529_tchat'])){
            $logged = 1;
        }else{
            $logged = 0;
        }
        return $logged;
    }