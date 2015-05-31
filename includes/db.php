<?php
/**
 * Created by PhpStorm.
 * User: 21104216
 * Date: 30/05/2015
 * Time: 9:26 PM
 */

$db['db_host'] = "127.0.0.1";
$db['db_username'] = 'root';
$db['db_password'] = '';
$db['db_dbname'] = 'yar_cms';

foreach($db as $key => $value){
    define(strtoupper($key ), $value);
}

$db = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD, DB_DBNAME );

if($db){
//    echo "we are connected";
}
