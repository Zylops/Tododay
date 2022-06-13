<?php include('header.php'); ?>
<?php
    if (isset($_POST['delete'])) {
        $todoID = mysqli_real_escape_string($conn, $_POST['todoID']);
        $sql = "DELETE FROM todos WHERE id='$todoID'";

        $username = $_SESSION['username'];
        $userSQL = "SELECT * FROM users WHERE username = '$username'";
        $userResult = mysqli_query($conn, $userSQL);
        $user = mysqli_fetch_assoc($userResult);
        $userid = $user['id'];

        $getTodosSql = "SELECT * FROM todos WHERE userid = '$userid'";
        $getTodosResult = mysqli_query($conn, $getTodosSql);
        $todos = mysqli_fetch_all($getTodosResult, MYSQLI_ASSOC);

        foreach ($todos as $todo) {
            if ($todo['id'] == $todoID) {
                mysqli_query($conn, $sql);
                header('Location: index.php');
                break;
            }
        }

        header('index.php');
    } else {
        header('Location: index.php');
    }
?>