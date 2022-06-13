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

<?php
    include('config/dbConnect.php');
    session_start();
?>

<div class="p-16 flex justify-center align-middle bg-blue-200">
    <?php include('src/logo.php'); ?>
</div>