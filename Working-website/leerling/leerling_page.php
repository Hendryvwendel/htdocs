<?php
include('config.php');

?>

<!DOCTYPE html>
<html>
<head>
        <title>Bestandsupload Informatica</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/userpage.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        </div>
        
    <div id="main">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select File to Upload:
            <input type="file" name="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
            
        </form>

        <div id="ftp">
        <?php
           

            // set up basic connection
            $conn_id = ftp_connect($ftp_server);

            // login with username and password
            $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

            if ((!$conn_id) || (!$login_result)) {
                echo "FTP connection has failed!";
                echo "Attempted to connect to $ftp_server for user $ftp_user_name";
                exit;
            }

            echo '<ul>';
            $contents = ftp_nlist($conn_id, "/");
            foreach ($contents as $value) {
                if ($value != "/." && $value != "/..") {
                    echo '<li>';
                    echo $value;
                    echo '</li>';
                }
            }
            echo '</ul>';

            ftp_close($conn_id);
            ?>
        </div>
    </div>
</body>
</html>