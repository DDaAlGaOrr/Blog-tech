<?php
function DbCnx(){

    $server = 'localhost';
    $username = "id15438860_blog_tech";
    $passwordDB = 'iR5=J~]I3tC\/hbz';
    $database = 'id15438860_blog';

    $cnx = new PDO("mysql:host=$server; dbname=$database",$username,$passwordDB);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $cnx;
}