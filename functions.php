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
function get_announcements($connect, $id)
{
    $sentence = $connect->prepare("SELECT * FROM announcement LEFT JOIN announcement_reader ON announcement.id = announcement_reader.announcement_id AND announcement_reader.user_id = :id");
    $sentence->execute(array(
        ':id' => $id
    ));
    $sentence->execute();
    return $sentence->fetchAll(PDO::FETCH_ASSOC);
}
function generateVerificationCode($length = 6) {
    // Characters that can be used in the verification code
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';

    // Generate a random code of the specified length
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $code;
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
