<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>

<body>
    <form method="post" action="recupColor.php">
        <label for="color_select">Choisissez une couleur :</label>
            <select id="color_select" name="color">
                <option value="red">Rouge</option>
                <option value="blue">Bleu</option>
                <option value="green">Vert</option>
                <option value="yellow">Jaune</option>
                <option value="black">Noir</option>
            </select>
        <input type="submit" value="Soumettre">
    </form>
    <a href="page1.php">Page1</a>
    <a href="page2.php">Page2</a>
    <a href="page3.php">Page3</a>
</body>
</html>