<?php include('header.php'); ?>
    <?php 
        if ($_SESSION) {
            header('Location: todos.php');
        }
    ?>

<title>Tododay</title>

<div class="flex justify-center md:justify-between p-4 md:p-3 bg-white opacity-50">
        <div class="hidden md:block">
        <h1 class="text-xl font-bold text-center ">Hello, <span class="text-gray-500">guest</span>.</h1>
        </div>
        <div class="">
            <a href="login.php" class="rounded bg-blue-200 text-blue-800 p-2 font-bold">Login</a>

            <a href="register.php" class="rounded bg-green-200 text-green-800 p-2 font-bold">Register</a>
        </div>
    </div>
</div>

<hr>

<div class="text-center m-4 text-sm text-gray-400">
    <p>Tododay is a simple web application that lets you create an account and note down todos for later reference! This was more of a practice than a full scale project, but I decided to deploy it anyway.</p>
</div>

<?php include('footer.php'); ?>
<!-- 
 -->