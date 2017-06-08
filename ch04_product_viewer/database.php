<?php
    $dsn = 'mysql:host=php.hex.ink;dbname=guitar_shop1';
    $username = 'rebecca';
    $password = 'P@ssw0rd1';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>