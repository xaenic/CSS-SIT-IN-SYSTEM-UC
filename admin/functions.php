<?php

function connect($database)
{
    try {
        $connect = new PDO('mysql:host=' . $database['host'] . ';dbname=' . $database['db'], $database['user'], $database['pass'], array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''
        ));
        return $connect;
    } catch (PDOException $e) {
        return false;
    }
}
// function cleardata($data)
// {
//     $antiXss = new AntiXSS();
//     $data = $antiXss->xss_clean($data);
//     return $data;
// }

// function cleardataTextArea($data)
// {

//     $antiXss = new AntiXSS();
//     $data = $antiXss->xss_clean($data);
//     return $data;
// }
