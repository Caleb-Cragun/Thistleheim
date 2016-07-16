<?php

// Begins a session that is 1 year in length
$lifetime = 60 * 60 * 24 * 365;             // 1 year in seconds
session_set_cookie_params($lifetime, '/');
session_start();


// Gets the tasks from an array for the session or creates an
// empty array if it doesn't exist 
if(isset($_SESSION['tasklist'])){
    $task_list = $_SESSION['tasklist'];
}else{
    $task_list = array();
}

$action = filter_input(INPUT_POST, 'action');
$errors = array();

switch( $action ) {
    case 'add':
        $new_task = filter_input(INPUT_POST, 'newtask');
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
            $task_list[] = $new_task;
        }
        break;
    case 'delete':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be deleted.';
        } else {
            unset($task_list[$task_index]);
            $task_list = array_values($task_list);
        }
        break;
}
// Updates the array of tasks for the session 
$_SESSION['tasklist'] = $task_list;

include('task_list.php');
?>