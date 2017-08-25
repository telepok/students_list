<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.08.2017
 * Time: 0:52
 */

$user = "root";
$password = "Passw0rd";

//$dbh = new PDO('mysql:host=localhost;dbname=sakila', $root, $password);

//var_dump($dbh->query('select * from actor'));

$dbh = new PDO('mysql:host=localhost;dbname=sakila', $user, $password);
foreach($dbh->query('SELECT * from actor') as $row) {
//    print_r($row);
    echo "\n";
}

var_dump($dbh->query('SELECT * from actor'));