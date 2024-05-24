<?php

$server = "mariadb"; //localhost
$username = "root";
$password = "secret";
$database = "db_daily_task";

function db_connect($server, $username, $password, $database)
{
    $link = mysqli_connect($server, $username, $password, $database);
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $link;
}

$link = db_connect($server, $username, $password, $database);

function insert_daily_task($task_type, $task_name, $task_period_start, $task_period_end, $task_status){
    global $link;
    $query = "INSERT INTO Tasks (task_type, task_name, task_period_start, task_period_end, task_status) VALUES('$task_type','$task_name', '$task_period_start', '$task_period_end', '$task_status')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }
    return $result;
}

function get_all_tasks(){
    global $link;
    $query = "SELECT * FROM Tasks";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }

    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $tasks;
}

function get_task($id){
    global $link;
    $query = "SELECT * FROM Tasks WHERE id='$id'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }

    $task = mysqli_fetch_assoc($result);
    return $task;
}

function update_task($id, $task_type, $task_name, $task_period_start, $task_period_end, $task_status){
    global $link;
    $query = "UPDATE Tasks SET 
        task_type='$task_type', 
        task_name='$task_name', 
        task_period_start='$task_period_start', 
        task_period_end='$task_period_end', 
        task_status='$task_status' 
        WHERE id='$id'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }
    return $result;
}

function delete_task($id){
    global $link;
    $query = "DELETE FROM Tasks
        WHERE id='$id'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }
    return $result;
}

function date_search($date){
    global $link;
    $query = "SELECT * FROM Tasks WHERE DATE(task_period_start) = '$date'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }

    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $tasks;

}

