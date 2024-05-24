<?php
require_once('./db_model.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $task = get_task($id);

    if(isset($_POST['action_update_task'])){
        $task_type = $_POST['task_type'];
        $task_name = $_POST['task_name'];
        $task_period_start = $_POST['task_period_start'];
        $task_period_end = $_POST['task_period_end'];
        $task_status = $_POST['task_status'];

        update_task($id, $task_type, $task_name, $task_period_start, $task_period_end, $task_status);
        $task = get_task($id);
    }
    require_once('./task_update_view.php');

    
}else{
    require_once('./index.php');
}



