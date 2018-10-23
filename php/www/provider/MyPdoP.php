<?php
/**
 * Created by PhpStorm.
 * User: alexg78bis
 * Date: 21/10/2018
 * Time: 22:39
 */

class MyPdoP
{
    static public $host = 'db';
    static public $dbname = 'myDb';
    static public $user = 'user';
    static public $password = 'test';


    public static function getPDO(){
        return new PDO('mysql:host='.MyPdoP::$host.';dbname='.MyPdoP::$dbname.';charset=utf8', MyPdoP::$user, MyPdoP::$password);
    }


}