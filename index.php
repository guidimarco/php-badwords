<?php
    // comment
    $badword = $_GET["badword"];
    $paragrafo = "Lorem ipsum " . $_GET["badword"] . " dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-badwords</title>
    </head>
    <body>
        <h1>Title</h1>
        <p><?php echo $paragrafo; ?></p>
        <p><?php var_dump($paragrafo); ?></p>
        <p><?php echo $_GET["badword"]; ?></p>
    </body>
</html>
