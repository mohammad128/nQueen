<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>n-Queen</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <script defer src="assets/js/app.js"></script>
</head>
<body>
<?php
require_once __DIR__.'/App/nQueen.php';
$x = $_GET['x']??0;
$y = $_GET['y']??0;
$queen = new nQueen($x, $y);
$board = $queen->run()->getBoard();
?>
<table class="qqcoisa">
    <?php
    for ($y=0; $y<count($board); $y++)
    {
        echo "<tr>";
        for ($x=0; $x<count($board[$y]); $x++)
        {
            $active = false;
            if (!empty($board[$y][$x]))
                $active = 'active';
            $char = $active ? '♛' : '';
            echo <<<HTML
                <td onclick="setItem({$x}, {$y})" class='item {$active}'>
                    {$char}
                    <span class='line x-y'></span>
                    <span class='line line-45deg'></span>
                    <span class='line line-45deg-'></span>
                </td>
            HTML;
        }
        echo "</tr>";
    }
    ?>
    <!--♜	♞	♝	♛	♚	♝	♞	♜-->
    <!--♟	♟	♟	♟	♟	♟	♟	♟-->
    <!--♙	♙	♙	♙	♙	♙	♙	♙-->
    <!--♖	♘	♗	♕	♔	♗	♘	♖-->
</table>
</body>
</html>