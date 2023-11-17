<?php
include '../../models/PDO_admin.php';
$action = $_GET['action'] ?? 0;
switch ($action) {
    case 'addTodolist':
    {
        $sql = "INSERT INTO todolist(content) VALUES ('')";
        echo query_returnID($sql);
        break;
    }
    case 'deleteTodolist':
    {
        $id = $_GET['todolist_id'] ?? 0;
        if (deleteData('todolist', 'todolist_id=' . $id)) {
            echo 'success';
        }
        break;
    }
    case 'toggleStatus':
    {
        $status = $_GET['status'];
        $id = $_GET['todolist_id'] ?? 0;

        if ($status == 'completed') {
            updateData('todolist', [
                'status' => 'not-completed'
            ], 'todolist_id=' . $id);

                echo 'not-completed';
        }
        if($status == 'not-completed'){
            updateData('todolist', [
                'status' => 'completed'
            ], 'todolist_id=' . $id);

                echo 'completed';
        }
        break;
    }
    case 'editContentTodolist':
    {
        $id = $_GET['todolist_id'] ?? 0;
        $content = $_GET['content']??'';
        updateData('todolist', [
            'content' => $content
        ], 'todolist_id=' . $id);
        break;
    }
}
