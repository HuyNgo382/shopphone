<?php
define('DB_Name', 'Shopphone');
define('DB_USER', 'root');
define('USER_PASS', '');
define('URL', 'mysql:host=localhost; db_name =  ' .DB_Name);


function get_pdo() {
    $pdo = null;
    try {
        $pdo = new PDO(URL, DB_USER, USER_PASS);
        $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e) {
        echo 'erro';
    }
    return $pdo;
}
?>