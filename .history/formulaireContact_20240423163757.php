<?php include("head.php") ?>
<meta name="description" content="Un projet ou une proposition d'emploi, merci de compléter le Formulaire De Contact">
<title>Me Contacter </title>
</head>

<?php include("header.php"); ?>

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
  $telephone = isset($_POST["telephone"]) ? preg_replace("/[^0-9]/", "", $_POST["telephone"]) : null; // Ne garde que les chiffres du numéro de téléphone

  // Vérifiez si l'adresse e-mail est vide
  if ($email === null) {
      echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">Email invalide</p>';
  } else {
      // Vérification du reCAPTCHA
      $recaptchaResponse = $_POST['g-recaptcha-response'];
      $recaptchaSecretKey = $config['recaptcha_secret_key'];
      
      $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify";
      $recaptchaData = [
          'secret' => $recaptchaSecretKey,
          'response' => $recaptchaResponse,
      ];

      $options = [
          'http' => [
              'header' => "Content-type: application/x-www-form-urlencoded\r\n",
              'method' => 'POST',
              'content' => http_build_query($recaptchaData),
          ],
      ];

      $context = stream_context_create($options);
      $jsonResponse = file_get_contents($recaptchaUrl, false, $context);

      $recaptchaResult = json_decode($jsonResponse, true);

      if ($recaptchaResult['success'] === false) {
          echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">Veuillez compléter le reCAPTCHA correctement.</p>';
      } else {
          // Envoi de l'e-mail
          $message = "Message envoyé de :\nNom : $nom\nEmail : $email\nTéléphone : $telephone\nObjet : $objet\nMessage : $message";
          $retour = mail("michel.hof@hotmail.fr", $objet, $message, "From: contact@cvmichel-hoffmann.fr" . "\r\n" . "Reply-to: $email");

          if ($retour) {
              echo '<p class="alert alert-success mt-3 fw-bold">L\'email a bien été envoyé</p>';
          } else {
              echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">Erreur lors de l\'envoi de l\'email</p>';
          }
      }
  }
}
?>

<!-- Corps du site -->
<div class="corps size20 text lead">
<h2 class="size40 borderBottomDark">Me contacter par mail ou au 06-66</h2>

<div>
  <form action="#" method="POST">
    <fieldset>
      <legend class="lead">Renseigner les informations</legend>

      <div class="mb-3 lead">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" placeholder="Nom / Prenom" required>
      </div>

      <div class="mb-3 lead">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="nom@exemple.com" required>
      </div>

      <div class="mb-3 lead">
        <label for="telephone">Téléphone:</label>
        <input type="tel" name="telephone" id="telephone" placeholder="Numéro de téléphone" pattern="[0-9]+" title="Veuillez saisir uniquement des chiffres">
      </div>

      <div class="mb-3 lead">
        <label for="objet">Objet:</label>
        <select name="objet" id="objet">
          <option>Proposition d'emploi</option>
          <option>Proposition projet</option>
          <option>Autre</option>
        </select>
      </div>

      <div class="mb-3 lead">
        <label for="message">Message:</label>
        <textarea name="message" id="message" cols="30" rows="5"></textarea>
      </div>


      <div class="mb-3 offset-md-2">
        <div class="g-recaptcha" data-sitekey="6Le7fmIpAAAAAO77xIgENVHaZBWMWem4N62HQ3cx" data-callback="onRecaptchaSubmit"></div>
      </div>

      <input type="submit" value="Envoyer" class="buttonContact">
    </fieldset>
  </form>
</div>
</div>

<!-- Footer du site -->
<?php include("footer.php"); ?>