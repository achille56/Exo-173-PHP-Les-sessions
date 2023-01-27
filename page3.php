<?php
session_start();
if (isset($_SESSION['bg_color'])) {
    $bg_color = $_SESSION['bg_color'];
    echo "<body style='background-color: $bg_color;'>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>

<body style="background-color: <?= $_SESSION["color"]?>">

<a href="index.php">Index</a>
<a href="page1.php">Page1</a>
<a href="page2.php">Page2</a>

</body>
</html>
