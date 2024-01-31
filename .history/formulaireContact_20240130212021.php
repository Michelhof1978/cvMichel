<?php include("head.php") ?>
<meta name="description" content="Un projet ou une proposition d'emploi, Merci de compléter le Formulaire De Contact">
<title>Me Contacter </title>
</head>

<?php include("header.php") ?>

<?php
// Clé privée reCAPTCHA 
// $config = include('./config/config.php');

// // Utiliser la clé secrète reCAPTCHA
// $secretKey = $config['recaptcha_secret_key'];

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
//   // Récupération des données du formulaire en les nettoyant
//   $nom = htmlspecialchars($_POST["nom"]);
//   $email = isset($_POST["email"]) ? filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) : null;
//   $objet = htmlspecialchars($_POST["objet"]);
//   $message = htmlspecialchars($_POST["message"]);

//   // Vérifiez si l'adresse e-mail est vide
//   if ($email === null) {
//     echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">Email invalide</p>';
//   } else {
//     $message = "Message envoyé de :\nNom : $nom\nEmail : $email\nObjet : $objet\nMessage : $message";

//     // Envoi de l'e-mail
//     $retour = mail("michel.hof@hotmail.fr", $objet, $message, "From: contact@cvmichel-hoffmann.fr" . "\r\n" . "Reply-to: $email");

//     if ($retour) {
//       echo '<p class="alert alert-success mt-3 fw-bold">L\'email a bien été envoyé</p>';
//     } else {
//       echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">Erreur lors de l\'envoi de l\'email</p>';
//     }
//   }
// }
?>

<?php
// Clé privée reCAPTCHA 
$config = include('./config/config.php');

// Utiliser la clé secrète reCAPTCHA
$secretKey = $config['recaptcha_secret_key'];

// Initialiser le message d'erreur
$error_message = '';

$rgpdAccepted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier que tous les champs sont remplis
    if (
        isset($_POST["nom"]) &&
        isset($_POST["phoneNumber"]) &&
        isset($_POST["email"]) &&
        isset($_POST["message"]) &&
        isset($_POST['g-recaptcha-response']) &&
        isset($_POST['rgpdCheckbox'])
    ) {
        // Validation du CAPTCHA
        $captchaResponse = $_POST['g-recaptcha-response'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $secretKey,
            'response' => $captchaResponse,
            'remoteip' => $ip
        );
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result, true);

        if ($response['success']) {
            // Le CAPTCHA est valide = traitement du formulaire
            // Validation du RGPD
            if ($_POST['rgpdCheckbox'] === 'on') {
                $rgpdAccepted = true;
            }

            // Modifier le message pour inclure l'information sur l'acceptation des RGPD
            $message = "Contact CV :\n" .
                "Nom : " . htmlspecialchars($_POST["nom"]) . "\n" .
                "Téléphone : " . htmlspecialchars($_POST["phoneNumber"]) . "\n" .
                "Email : " . htmlspecialchars($_POST["email"]) . "\n" .
                "Message : " . htmlspecialchars($_POST["message"]) . "\n" .
                "RGPD accepté : " . ($rgpdAccepted ? 'Oui' : 'Non');

            $object = "Demande de renseignements";
            $retour = mail("postmaster@lescaravanesdelabesbre.fr", "Nouveau Message", $message, "From: contact@Lescaravanesdelabesbre.fr" . "\r\n" . "Reply-to: " . htmlspecialchars($_POST["email"]));
            //$retour = mail("michel.hof@hotmail.fr", "Nouveau Message", $message, "From: contact@Lescaravanesdelabesbre.fr" . "\r\n" . "Reply-to: " . htmlspecialchars($_POST["email"]));

            if ($retour) {
                // Redirection vers une page de confirmation après la soumission du formulaire
                echo '<script>window.location.replace("confirmationContactRenseignements.php");</script>';
                exit();
            } else {
                $error_message = "Une erreur est survenue lors de l'envoi du formulaire. Veuillez réessayer.";
            }
        } else {
            // Le CAPTCHA est invalide, affichez un message d'erreur
            $error_message = "CAPTCHA invalide, veuillez réessayer.";
        }
    } else {
        // Les champs sont manquants, afficher un message d'erreur
        $error_message = "Veuillez remplir tous les champs du formulaire.";
    }
}
?>


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
          <label for="phoneNumber">:</label>
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

        <!-- <div class="g-recaptcha" data-sitekey="VOTRE_CLE_PUBLIQUE_RECAPTCHA"></div> -->

        <input type="submit" value="Envoyer" class="buttonContact" />
      </fieldset>
    </form>
  </div>
</div>

<!-- Footer du site -->
<?php include("footer.php"); ?>