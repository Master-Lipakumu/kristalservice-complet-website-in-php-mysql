<?php
    function user_exist(){
        global $db;
        $e = array('user' => $_GET['user'], 'session'=>$_SESSION['epiz_22726529_tchat']);
        $sql = "SELECT * FROM users WHERE email =:user AND email != :session";
        $req = $db->prepare($sql);
        $req->execute($e);
        $exist = $req->rowCount($sql);
        return $exist;
    }

    function get_user(){
        global $db;
        $req = $db->query("SELECT * FROM users WHERE email = '{$_SESSION['user']}'");
        $user = array();
        while($row = $req->fetchObject()){
            $user[] = $row;
        }
        return $user;

    }