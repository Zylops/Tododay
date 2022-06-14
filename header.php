<!-- Styling -->

<link rel="icon" href="src/tododay.svg">

<script src="https://cdn.tailwindcss.com?plugins=forms"></script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap');
.font-poppins {
    font-family: 'Poppins', sans-serif;
}
</style>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
</script>

<!-- Responsiveness -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Database Connection -->

<?php
    include('config/dbConnect.php');
    session_start();
?>

<!-- Header Banner -->

<div class="p-16 flex justify-center align-middle bg-blue-200">
    <?php include('src/logo.php'); ?>
</div>