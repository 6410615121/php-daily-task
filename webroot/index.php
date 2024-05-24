<?php
require_once('./db_model.php');

$tasks = array();

if(isset($_GET['delete_task_id'])){
    $id = $_GET['delete_task_id'];
    delete_task($id);
}

if(isset($_POST['action_date_search'])){
    $date = $_POST['date'];

    $tasks = date_search($date);
}else{
    $tasks = get_all_tasks();
}

require_once('./index_view.php');

