<?php 
include('functions.php');
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}

include('navbar.php');  

?> 

<!DOCTYPE html>
<html lang="en">
<body>
    <header>
    </header>
    <main>
        <img src="assets/background.svg" alt="background">
    </main>

</body>
</html>