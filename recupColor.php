<?php

session_start();
if (isset($_POST['color'])) {
    $selected_color = $_POST['color'];
    $_SESSION['bg_color'] = $selected_color;
}

//modification de la couleur de fond.
if (isset($_POST['color'])) {
    $selected_color = $_POST['color'];
    echo "Vous avez sélectionné la couleur : " . $selected_color;
    echo "<body style='background-color: $selected_color;'>";
}







