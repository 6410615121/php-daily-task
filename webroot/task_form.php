<?php 
require_once('./db_model.php');

if(isset($_POST['action_insert'])){
    $task_type = $_POST['task_type'];
    $task_name = $_POST['task_name'];
    $task_period_start = $_POST['task_period_start'];
    $task_period_end = $_POST['task_period_end'];
    $task_status = $_POST['task_status'];

    $current_date = date('Y-m-d');

    $start_datetime = $current_date . ' ' . $task_period_start . ':00';
    $end_datetime = $current_date . ' ' . $task_period_end . ':00';

    insert_daily_task($task_type, $task_name, $start_datetime, $end_datetime, $task_status);
}


require_once('task_form_view.php');