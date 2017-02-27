<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=ark56';
    $username = 'ark56';
    $password = 'QUE6Pquc';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>