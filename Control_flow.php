<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'variable.php';

        if ($age < 18) {
            echo "You are adult now";
        } else {
            echo "You are Minor";
        }

    ?>
