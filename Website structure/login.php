<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
        <title>Bestandsupload Informatica</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
        <div class="header">
                <h2>Login</h2>
        </div>
        <form method="post" action="login.php">

                <?php echo display_error(); ?>

                <div class="input-group">
                        <label>Groepsnummer</label>
                        <input type="text" name="username" >
                </div>
                <div class="input-group">
                        <label>Groepswachtwoord</label>
                        <input type="password" name="password">
                </div>
                <div class="input-group">
                        <button type="submit" class="btn" name="login_btn">Login</button>
                </div>
                <p>
                        Weet je je gegevens niet meer? Vraag het de docent!
                </p>
        </form>
</body>
</html>