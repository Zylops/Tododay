<?php include('header.php'); ?>

    <?php 
        if ($_SESSION) {
            header('Location: todos.php');
        }
    ?>


    <div class="mt-6">
        <h1 class="text-xl font-bold text-center">Hello, <span class="text-gray-500">guest</span>.</h1>

        <div class="flex justify-center p-4 gap-3">
            <a href="login.php" class="rounded bg-blue-200 text-blue-800 p-2 font-bold">Login</a>

            <a href="register.php" class="rounded bg-green-200 text-green-800 p-2 font-bold">Register</a>
        </div>
    </div>
<?php include('footer.php'); ?>