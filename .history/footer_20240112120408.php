<!-- Footer du site -->
<div class="cv mb-5 mt-5">

  <h3 class="lead">CV à télécharger</h3>

  <a href="images/cv-michelHoffmann.pdf" download>
    <img src="images/cv.png" alt="Téléchargement CV" title="Téléchargement CV" class="img-fluid">
  </a>

</div>

<footer class="footer text-center text-white bg-colorBlue3 mt-4 p-4">
  <div class="container">

  <a href="https://github.com/Michelhof1978" class="me-3" target="_blank">
  <img src="images/github.png" alt="Projets Github" title="Projets Github" class="img-fluid">
</a>

<a href="https://www.linkedin.com/in/michel-h-245436203/" class="me-3" target="_blank">
  <img src="images/linkedinLogo.png" alt="Profil Linkedin" title="Profil Linkedin" class="img-fluid">
</a>


    <div class="mt-3">
      Tous droits réservés
    </div>

    <div class="compteur mt-3">
      <a href="http://www.mon-compteur.fr">
        <img src="http://www.mon-compteur.fr/html_c02genv2-74909-2" alt="Compteur de visite">
      </a>
    </div>

  </div>
</footer>

<script>
  //NAVBAR COLOR SURVOL
  var cheminComplet = document.location.href;
  var nomDuFichier = cheminComplet.substring(cheminComplet.lastIndexOf("/") + 1);

  const menuLien = document.querySelectorAll("a");
  console.log(menuLien);

  const arrayMenuLien = [...menuLien];

  arrayMenuLien.map((lien, index) => {
    if (lien.getAttribute("href") == nomDuFichier) {
      document.querySelectorAll("a")[index].className += "selected";
    }
  });
</script>

<!-- FORMULAIRE DE CONTACT -->
<script>
function validateContactForm() {
        // Validation de l'adresse e-mail
        let emailInput = document.getElementById('email');
        let emailValue = emailInput.value.trim();
        let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!emailRegex.test(emailValue)) {
            alert('Veuillez saisir une adresse email valide.');
            emailInput.focus();
            return false;
        }

        // Validation du numéro de téléphone
        var phoneNumberInput = document.getElementById("phoneNumber");
        var phoneNumberValue = phoneNumberInput.value;

        // Vérifier si la valeur du numéro de téléphone contient uniquement des chiffres
        var phoneRegex = /^[0-9]+$/;

        if (!phoneRegex.test(phoneNumberValue)) {
            alert("Veuillez saisir uniquement des chiffres pour le numéro de téléphone.");
            return false;
        }

    // Validation du RGPD
    let rgpdCheckbox = document.getElementById('rgpdCheckbox');
    if (!rgpdCheckbox.checked) {
        alert('Vous devez accepter la politique de confidentialité.');
        rgpdCheckbox.focus();
        return false;
    }

    // Validation du reCAPTCHA
    let recaptchaResponse = grecaptcha.getResponse();
    if (recaptchaResponse.length == 0) {
        alert('Veuillez cocher le reCAPTCHA.');
        return false;
    }

    return true;
}
</script>

</body>

</html>