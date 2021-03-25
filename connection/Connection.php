<?php
class Connection {
    
    public static function getConnection(){
        $banco = "mysql:host=localhost;dbname=redesocial";
        $user = "root";
        $senha = "";
        return new PDO($banco, $user, $senha);
    }
}
?>
    

