<?php
# __DB_USER__ in __DB_PASS__ ob namestitvi zamenja provisioning skripta (gesla niso v gitu)define('DB_HOST', 'localhost'); 
define('DB_USER', '__DB_USER__');
define('DB_PASS', '__DB_PASS__');
define('DB_NAME', 'thesismatch');

try {
    $pdo = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8',
        DB_USER,
        DB_PASS
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Napaka pri povezavi z bazo: ' . $e->getMessage());
}
