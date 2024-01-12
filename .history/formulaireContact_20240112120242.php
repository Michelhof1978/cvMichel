<?php include("header.php"); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Assurez-vous que le formulaire est soumis en POST

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
<div class="corps size20 text">
  <h2 class="size40 borderBottomDark">Me contacter</h2>

  <form class="needs-validation" id="myForm" onsubmit="return validateContactForm()" novalidate action="#" method="POST">    <fieldset class="mb-5 ms-2 me-2">

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="firstName" class="form-label">Prénom</label>
                            <input name="firstName" type="text" id="firstName" class="form-control" placeholder="Prénom" required>
                            <div class="invalid-feedback">
                                Veuillez saisir votre prénom.
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-outline">
                            <label for="lastName" class="form-label">Nom</label>
                            <input name="lastName" type="text" id="lastName" class="form-control" placeholder="Nom" required>
                            <div class="invalid-feedback">
                                Veuillez saisir votre nom.
                            </div>
                        </div>
                    </div>

                    <div class="col">
                    <div class="form-outline mb-4">
    <label for="phoneNumber" class="form-label">Téléphone</label>
    <input name="phoneNumber" type="tel" id="phoneNumber" class="form-control" placeholder="Téléphone" pattern="[0-9]{10,15}" required>
    <div class="invalid-feedback">
        Veuillez saisir un numéro de téléphone valide (au moins 10 chiffres).
    </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
    <label for="email" class="form-label">Adresse Email</label>
    <div class="input-group has-validation">
        <input name="email" type="email" id="email" class="form-control" placeholder="Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|fr)$">
        <div class="invalid-feedback">
            Veuillez saisir une adresse email valide avec un domaine .com ou .fr.
        </div>
    </div>
</div>

<div class="form-group">
                    <label for="message" class="mb-2">Message</label>
    <div class="form-floating">
        <textarea name="message" class="form-control" id="message" required></textarea>
        <label for="message">Votre Message</label>
        <div class="invalid-feedback">
            Veuillez saisir votre message.
        </div>
    </div>
</div>

                     <!-- Case à cocher RGPD -->
                     <div class="form-check mb-4 mt-3">
    <input class="form-check-input" type="checkbox" id="rgpdCheckbox" name="rgpdCheckbox">
    <label class="form-check-label" for="rgpdCheckbox">
        J'accepte que mes données personnelles soient traitées conformément à la politique de confidentialité.
    </label>
    <div class="invalid-feedback" id="rgpdError" style="display: none;">
        Vous devez accepter la politique de confidentialité.
    </div>
</div>

                    <div class="g-recaptcha m-4" data-sitekey="6Ld72FwnAAAAABXBamvH-_h6-dyX_phTGFlAWCgR"></div>

                    <button type="submit" value="Valider" id="send-data" class="btn btn-primary btn-block mb-4">
                        Envoyez
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
<!-- Footer du site -->
<?php include("footer.php"); ?>