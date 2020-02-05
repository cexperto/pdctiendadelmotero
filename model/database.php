<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=remotemysql.com;dbname=gu6EqlTj8p;charset=utf8', 'gu6EqlTj8p', 'sqYM6pwdQp');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
