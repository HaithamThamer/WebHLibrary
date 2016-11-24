<html>
    <head>
        <title>User Panel</title>
        <link rel="stylesheet" type="text/css" href="./../Style/main.css" />
    </head>
    <body>
        <?php
        if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'a' || $_SERVER['PHP_AUTH_PW'] != 'a') {
            header("WWW-AUTHENTICATE: Basic realm=\"User Panel\"");
            header("Location:./index.php");
            header("HTTP/1.0 401 Unauthorized");
            die("ERR_NO_AUTH");
        }else{
            
        }
        ?>
        <header>
            UOM | CS | <?=  basename(__dir__)?>
        </header>
        <section>
            <form method="post" action="./../application/upload.php" enctype="multipart/form-data">
                # file name must be in english and PDF
                <input type="file" name="file" accept="application/pdf" />
                <input type="submit" name="submit" value="Upload" />
            </form>
        </section>
        <footer>
            Programmed by <p>Haitham T. Abdalkader</p>
        </footer>
    </body>
</html>