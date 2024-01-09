<?php include("header.php"); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Assurez-vous que le formulaire est soumis en POST

  // Récupération des données du formulaire en les nettoyant
  $nom = htmlspecialchars($_POST["nom"]);
  $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
  $objet = htmlspecialchars($_POST["objet"]);
  $message = htmlspecialchars($_POST["message"]);

  // Vérifiez si l'adresse e-mail est valide
  if ($email) {
    $message = "Message envoyé de :\nNom : $nom\nEmail : $email\nObjet : $objet\nMessage : $message";

    // Envoi de l'e-mail
    $retour = mail("michel.hof@hotmail.fr", $objet, $message, "From: contact@cvmichel-hoffmann.fr" . "\r\n" . "Reply-to: $email");

    if ($retour) {
      echo "<p>L'email a bien été envoyé</p>";
    } else {
      echo "<p>Erreur lors de l'envoi de l'email</p>";
    }
  } else {
    echo "<p>Email invalide</p>";
  }
}

echo 
} else {
  echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">Erreur lors de l\'envoi de l\'email</p>';
}
?>

<!-- Corps du site -->
<div class="corps size20 text">
  <h2 class="size40 borderBottomDark">Me contacter</h2>

  <div>
    <form action="#" method="POST">
      <fieldset>
        <legend>Renseigner les informations</legend>

        <div class="mb-3">
          <label for="nom">Nom:</label>
          <input type="text" name="nom" id="nom" placeholder="Nom / Prenom" required />
        </div>

        <div class="mb-3">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" placeholder="nom@exemple.com" required />
        </div>

        <div class="mb-3">
          <label for="objet">Objet:</label>
          <select name="objet" id="objet">
            <option>Proposition d'emploi</option>
            <option>Proposition d'un projet</option>
            <option>Autre</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="message">Message:</label>
          <textarea name="message" id="message" cols="30" rows="5"></textarea>
        </div>
        <input type="submit" value="Envoyer" class="buttonContact" />
      </fieldset>
    </form>
  </div>
</div>

<!-- Footer du site -->
<?php include("footer.php"); ?>
