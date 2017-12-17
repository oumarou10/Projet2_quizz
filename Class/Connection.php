<?php
/**
 * Created by PhpStorm.
 * User: oumarucho
 * Date: 17/12/2017
 * Time: 02:42
 */

class Connection
{

    public static function getConnection() {

        return new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));

    }
}