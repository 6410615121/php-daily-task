<?php
require_once('./db_model.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $task = get_task($id);

    require_once('./task_update_view.php');
}else{
    require_once('./index.php');
}



