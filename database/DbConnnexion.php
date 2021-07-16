<?php

namespace App\Database;

use PDO;

class DbConnexion
{

    public static function getPDO()
    {
        return new PDO('mysql:dbname=popupmessage;host=127.0.0.1', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ]);
    }
}
