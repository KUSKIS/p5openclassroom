<?php

namespace Equus\P5\models;

abstract class Model
{

    private $db;

    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=equus;charset=utf8', 'root', '');

        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
        return $db;
    }
}
