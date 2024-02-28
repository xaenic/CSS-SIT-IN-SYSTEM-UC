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

function get_students($connect)
{
    $sentence = $connect->prepare("SELECT * FROM students");
    $sentence->execute();
    return $sentence->fetchAll(PDO::FETCH_ASSOC);
}
function get_labs($connect)
{
    $sentence = $connect->prepare("SELECT * FROM labs");
    $sentence->execute();
    return $sentence->fetchAll(PDO::FETCH_ASSOC);
}
function get_schedules($connect)
{
    $sentence = $connect->prepare("SELECT * FROM schedules");
    $sentence->execute();
    return $sentence->fetchAll(PDO::FETCH_ASSOC);
}
function get_staffs($connect)
{
    $statement = $connect->prepare("SELECT * FROM user WHERE role = :role");
    $statement->execute(array(
        ':role' => 'staff'
    ));

    return $statement->fetchAll(PDO::FETCH_ASSOC);
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
