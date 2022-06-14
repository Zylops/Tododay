<?php include('header.php'); ?>

<?php
    $username = $_SESSION['username'];
    $userSQL = "SELECT * FROM users WHERE username = '$username'";
    $userResult = mysqli_query($conn, $userSQL);
    $user = mysqli_fetch_assoc($userResult);
    $userid = $user['id'];

    $getTodosSql = "SELECT * FROM todos WHERE userid = '$userid'";
    $getTodosResult = mysqli_query($conn, $getTodosSql);
    $todos = mysqli_fetch_all($getTodosResult, MYSQLI_ASSOC);


    if (isset($_POST['submit'])) {
        $todo = mysqli_real_escape_string($conn, $_POST['todo']);
        $addTodoSql = "INSERT INTO todos (todo, userid) VALUES ('$todo', '$userid')";
        if (mysqli_query($conn, $addTodoSql)) {
            header('Location: todos.php');
        }
    }
?>

<title>Todos - Tododay</title>

<div class="flex justify-center m-4">
    <div class="shadow-md rounded-md p-4 w-96 m-2 inline-block">
        <div class="flex justify-between align-items-center">
            <h1 class="text-2xl font-bold">
                <?php
                    echo 'Hi, ' . '<span class="text-blue-500">' . $_SESSION['username'] . '</span>' . '!';
                ?>
            </h1>
            <a class="text-xs" href="logout.php">Logout?</a>
        </div>

        <p>Here are your todos!</p>

        <hr class="my-2">

        <ul class="todos">
            <?php foreach($todos as $todo): ?>
                <li class="flex justify-between transform transition hover:scale-105 p-2 border-2 text-lg">
                    <p><?php echo $todo['todo']; ?><p>
                    <form action="deleteTodo.php" method="POST">
                        <input type="hidden" name="todoID" value="<?php echo $todo['id']; ?>">
                        <input type="submit" name="delete" value="X" class="hover:cursor-pointer font-bold text-red-600">
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <form action="#" method="POST" class="flex justify-center">
            <input type="text" name="todo" id="" class="w-full rounded-md my-2">
            <input type="submit" name="submit" value="+" class="hover:cursor-pointer m-2 p-3 text-xl font-bold text-blue-700 bg-blue-200 rounded-md">
        </form>
    </div>
</div>

<?php include('footer.php'); ?>