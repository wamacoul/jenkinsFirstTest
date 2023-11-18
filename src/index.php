<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application PHP Simple</title>
</head>
<body>

<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer le nom du formulaire
    $nom = htmlspecialchars($_POST["nom"]);

    // Vérifier si le nom n'est pas vide
    if (!empty($nom)) {
        // Afficher le message de salutation
        echo "<p>Bonjour, $nom !</p>";
    } else {
        // Afficher un message d'erreur si le nom est vide
        echo "<p>Veuillez saisir un nom.</p>";
    }
}
?>

<!-- Formulaire simple -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom">
    <input type="submit" value="Saluer">
</form>

</body>
</html>
