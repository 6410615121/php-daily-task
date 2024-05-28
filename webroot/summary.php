<?php
require_once('db_model.php');


if(isset($_POST['action_date_search'])){
    $date = $_POST['date'];
    // echo $date;

    $tasks = date_search($date);
}elseif(isset($_POST['action_month_search'])){
    $month = $_POST['month'];
    $month = date('m', strtotime($month));
    // echo $month;

    $tasks = month_search($month);
}else{
    $date = date('Y-m-d');
    $tasks = date_search($date);
    // echo $date;
}

// summarize //
$all_task_count = count($tasks);

$working_count = 0;
$canceled_count = 0;
$finished_count = 0;

$test_type_count = 0;
$document_type_count = 0;
$development_type_count = 0;

foreach($tasks as $task){
    if($task['task_status'] == 'working'){
        $working_count ++;
    }elseif($task['task_status'] == 'finished'){
        $finished_count++;
    }else{
        $canceled_count++;
    }

    if($task['task_type'] == 'Development'){
        $development_type_count++;
    }elseif($task['task_type'] == 'Test'){
        $test_type_count++;
    }else{
        $document_type_count++;
    }
}
// end summarize //

require_once('./summary_view.php');


