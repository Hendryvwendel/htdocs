<?php 
include('functions.php');
include_once('navbar.php');    

?>
<head>
        <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="nav">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Informatica Upload</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="index.php">Home</span></a></li>
            <li class="nav-item active"><a class="nav-link" href="leerling/leerling_page.php">About us</a></li>
            <li class="nav-item active"><a class="nav-link" href="faq.php">FAQ</a></li>
        </ul>


    <a class="btn btn-primary" href="login.php">Login</a>
    </div>
    </nav>
    </div>

<!-- <form method="post" action="login.php">



    <?php echo display_error(); ?>

    <div class="form-outline mb-4">
        <div class="input-group">
            <label>Groepsnummer</label>
            <input type="text" name="username" >
        </div>
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
    </p>  -->


    
</form>
       

        
 
    <h3>Inloggen</h3>



<main>
    <div  class="container-sm align">
        <form method="post" action="login.php">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Groepsnummer</label>
                <input type="email" id="form2Example1" name="username" class="form-control" />
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Groepswachtwoord</label>
                <input type="password" id="form2Example2" class="form-control" />
            </div>
            <!-- 2 column grid layout for inline styling -->
        
        
            </div>
            <!-- Submit button -->
            <div class="container">
            <button type="button" class="btn btn-primary btn-block mb-4">Log in</button>
            </div>
        </form>
        <div class="text-center">
            <p>Weet je je gegevens niet meer? Vraag het de docent!</p>
        </button>
    </div>
</main>
<div class="home-img">

</div>


</body>
</html>