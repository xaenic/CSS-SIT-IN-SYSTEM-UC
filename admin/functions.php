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

function get_student($connect,$id_no){
    $statement = $connect->prepare("SELECT * FROM students WHERE id = :id");
    $statement->execute(array(
        ':id' => $id_no
    ));
    $statement = $statement->fetchAll();
    return ($statement) ? $statement : false;
}

function get_sessions($connect)
{
    $sentence = $connect->prepare("SELECT * FROM sessions INNER JOIN students ON students.id = sessions.student_id ORDER BY time_out ");
    $sentence->execute();
    return $sentence->fetchAll(PDO::FETCH_ASSOC);
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