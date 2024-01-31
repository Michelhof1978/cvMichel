<?php include("head.php") ?>
<meta name="description" content="Un projet ou une proposition d'emploi, merci de compléterFormulaire De Contact">
<title>Me Contacter </title>
</head>

<?php include("header.php") ?>

<?php
// Clé privée reCAPTCHA 
$config = include('./config/config.php');

// Utiliser la clé secrète reCAPTCHA
$secretKey = $config['recaptcha_secret_key'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
  // Récupération des données du formulaire en les nettoyant
  $nom = htmlspecialchars($_POST["nom"]);
  $email = isset($_POST["email"]) ? filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) : null;
  $objet = htmlspecialchars($_POST["objet"]);
  $message = htmlspecialchars($_POST["message"]);

  // Vérifiez si l'adresse e-mail est vide
  if ($email === null) {
    echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">Email invalide</p>';
  } else {
    $message = "Message envoyé de :\nNom : $nom\nEmail : $email\nObjet : $objet\nMessage : $message";

    // Envoi de l'e-mail
    $retour = mail("michel.hof@hotmail.fr", $objet, $message, "From: contact@cvmichel-hoffmann.fr" . "\r\n" . "Reply-to: $email");

    if ($retour) {
      echo '<p class="alert alert-success mt-3 fw-bold">L\'email a bien été envoyé</p>';
    } else {
      echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">Erreur lors de l\'envoi de l\'email</p>';
    }
  }
}
?>

<!-- Corps du site -->
<div class="corps size20 text lead">
  <h2 class="size40 borderBottomDark">Me contacter</h2>

  <div>
    <form action="#" method="POST">
      <fieldset>
        <legend class="lead">Renseigner les informations</legend>

        <div class="mb-3 lead">
          <label for="nom">Nom:</label>
          <input type="text" name="nom" id="nom" placeholder="Nom / Prenom" required />
        </div>

        <div class="mb-3 lead">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" placeholder="nom@exemple.com" required />
        </div>

        <div class="mb-3 lead">
          <label for="objet">Objet:</label>
          <select name="objet" id="objet">
            <option>Proposition d'emploi</option>
            <option>Proposition d'un projet</option>
            <option>Autre</option>
          </select>
        </div>

        <div class="mb-3 lead">
          <label for="message">Message:</label>
          <textarea name="message" id="message" cols="30" rows="5"></textarea>
        </div>

        <div class="g-recaptcha" data-sitekey="VOTRE_CLE_PUBLIQUE_RECAPTCHA"></div>

        <input type="submit" value="Envoyer" class="buttonContact" />
      </fieldset>
    </form>
  </div>
</div>

<!-- Footer du site -->
<?php include("footer.php"); ?>