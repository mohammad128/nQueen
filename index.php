<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>n-Queen</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
<?php
require_once __DIR__.'/App/nQueen.php';
$queen = new nQueen(0, 0);
$queen->run()->debug();
?>
    <table class="qqcoisa">
        <tr>
            <td>&#9820;</td>
            <td>&#9822;</td>
            <td>&#9821;</td>
            <td>&#9819;</td>
            <td>&#9818;</td>
            <td>&#9821;</td>
            <td>&#9822;</td>
            <td>&#9820;</td>
        </tr>
        <tr>
            <td>&#9823;</td>
            <td>&#9823;</td>
            <td>&#9823;</td>
            <td>&#9823;</td>
            <td>&#9823;</td>
            <td>&#9823;</td>
            <td>&#9823;</td>
            <td>&#9823;</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>&#9817;</td>
            <td>&#9817;</td>
            <td>&#9817;</td>
            <td>&#9817;</td>
            <td>&#9817;</td>
            <td>&#9817;</td>
            <td>&#9817;</td>
            <td>&#9817;</td>
        </tr>
        <tr>
            <td>&#9814;</td>
            <td>&#9816;</td>
            <td>&#9815;</td>
            <td>&#9813;</td>
            <td>&#9812;</td>
            <td>&#9815;</td>
            <td>&#9816;</td>
            <td>&#9814;</td>
        </tr>
    </table>

</body>
</html>