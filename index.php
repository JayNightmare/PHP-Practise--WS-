<!doctype html>

<?php require_once "student.php"?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Class test</title>
    </head>

    <body>
        <h2>This is a test</h2>
        <?php
        $paul = new Student();
        $paul -> id = "k2119852";

        $paul -> id = "k2119852";
        $paul->givenName = "Jay";
        $paul->familyName = "Bell";
        ?>
        <p>Our student is called
            <b>
                <?= $paul->givenName?>
            </b> and their ID is
            <b>
                <?= $paul->id?>
            </b></p>
    </body>
</html>