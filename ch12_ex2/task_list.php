<!DOCTYPE html>
<html>
<head>
    <title>Task List Manager</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <header>
        <h1>Task List Manager</h1>
    </header>
    <main>
        <?php if (count($errors) > 0) : ?>
        <h2>Errors</h2>
        <ul>
            <?php foreach($errors as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <h2>Tasks</h2>
        <?php if (count($task_list) == 0) : ?>
            <p>There are no tasks in the task list.</p>
        <?php else: ?>
            <ul>
            <?php foreach($task_list as $id => $task) : ?>
                <li><?php echo $id + 1 . '. ' . $task; ?></li>
            <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <br>

        <h2>Add Task</h2>
        <form action="." method="post" >
            <input type="hidden" name="action" value="add">
            <label>Task:</label>
            <input type="text" name="newtask" id="newtask"><br>
            <label>&nbsp;</label>
            <input type="submit" value="Add Task">
        </form>
        <br>

        <?php if (count($task_list) > 0) : ?>
        <h2>Delete Task</h2>
        <form action="." method="post" >
            <input type="hidden" name="action" value="delete">
            <label>Task:</label>
            <select name="taskid">
                <?php foreach($task_list as $id => $task) : ?>
                    <option value="<?php echo $id; ?>">
                        <?php echo $task; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <br>
            <label>&nbsp;</label>
            <input type="submit" value="Delete Task">
        </form>
        <?php endif; ?>
    </main>
</body>
</html>