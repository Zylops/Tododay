<?php include('header.php'); ?>

    <?php
        $err = '';

        if (isset($_POST['submit'])) {
            if ($_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '') {
                $username = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['email']);
                $password = hash('md5', htmlspecialchars($_POST['password']));

                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

                if (mysqli_query($conn, $sql)) {
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                } else {
                    $err = 'An SQL error occurred.';
                }
            } else {
                $err = 'Please fill all the fields.';
            }
        }
    ?>

    <div class="flex justify-center">
        <div class="rounded-md shadow-md p-4 m-4 inline">
            <h1 class="font-bold text-xl text-blue-600">Register</h1>
            <p class="m-0 text-xs text-red-500 mb-2"><?php echo $err; ?></p>
            <hr class="mb-3">
            <form action="#" method="POST">
                <label for="" class="text-xs text-gray-500 font-light">Username:</label>
                <br>
                <input type="text" name="username" id="" class="rounded p-1 my-1">
                <br>
                <label for="" class="text-xs text-gray-500 font-light">Email:</label>
                <br>
                <input type="email" name="email" id="" class="rounded p-1 my-1">
                <br>
                <label for="" class="text-xs text-gray-500 font-light">Password:</label>
                <br>
                <input type="password" name="password" id="" class="rounded p-1 my-1">
                <br>
                <input type="submit" value="Register!" name="submit" class="hover:cursor-pointer w-full bg-blue-600 text-white font-bold rounded p-2 mt-2">    
            <form>
        </div>
    </div>

<?php include('footer.php'); ?>