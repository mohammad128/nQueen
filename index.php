<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>n Queen</title>

    <link rel="stylesheet" href="includes/bvd-style.css">
</head>
<body>
<?php
require_once __DIR__.'/App/nQueen.php';
$queen = new nQueen(0, 0);
$queen->run()->debug();
?>

</body>
</html>