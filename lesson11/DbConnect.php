<?php


namespace Lesson11;


class DbConnect
{
    public static function getPdo(): \PDO
    {
        $dsn = 'mysql:host=app-mysql;port=3306;dbname=hillel';

        $pdo = new \PDO($dsn, 'hillel', 'PitstOp1234');
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}