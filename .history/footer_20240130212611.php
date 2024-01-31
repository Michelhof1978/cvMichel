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
  <img src="images/github.png" alt="Projets Github" target="_blank" title="Projets Github" class="img-fluid">
</a>

<a href="https://www.linkedin.com/in/michel-h-245436203/" class="me-3" target="_blank">
  <img src="images/linkedinLogo.png" alt="Profil Linkedin" target="_blank" title="Profil Linkedin" class="img-fluid">
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
        let emailInput = document.getElementById('email');//Obtient l'élément HTML avec l'ID "email" (champ d'adresse e-mail).
        let emailValue = emailInput.value.trim();//Obtient la valeur de l'adresse e-mail avec les espaces blancs supprimés.
        let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;//Définit une expression régulière pour valider l'adresse e-mail.

//Vérifie si la valeur de l'adresse e-mail correspond à l'expression régulière. Affiche une alerte si la validation échoue.
        if (!emailRegex.test(emailValue)) {
            alert('Veuillez saisir une adresse email valide.');
            emailInput.focus();
            return false;
        }

// Obtient l'élément HTML avec l'ID "phoneNumber" (champ de numéro de téléphone).
        let phoneNumberInput = document.getElementById("phoneNumber");
        let phoneNumberValue = phoneNumberInput.value;//Obtient la valeur du numéro de téléphone.

// Définit une expression régulière pour valider que le numéro de téléphone ne contient que des chiffres.
        let phoneRegex = /^[0-9]+$/;
//Vérifie si la valeur du numéro de téléphone correspond à l'expression régulière. Affiche une alerte si la validation échoue.
        if (!phoneRegex.test(phoneNumberValue)) {
            alert("Veuillez saisir uniquement des chiffres pour le numéro de téléphone.");
            return false;
        }

// Obtient l'élément HTML avec l'ID "rgpdCheckbox" (case à cocher RGPD).
        let rgpdCheckbox = document.getElementById('rgpdCheckbox');
        if (!rgpdCheckbox.checked) {
            alert('Vous devez accepter la politique de confidentialité.');
            rgpdCheckbox.focus();
            return false;
        }

// Obtient la réponse du reCAPTCHA.
        let recaptchaResponse = grecaptcha.getResponse();
//Vérifie si la réponse reCAPTCHA est vide. Affiche une alerte si la validation échoue.
        if (recaptchaResponse.length == 0) {
            alert('Veuillez cocher le reCAPTCHA.');
            return false;
        }
// Si toutes les validations précédentes sont réussies, la fonction renvoie true, indiquant que le formulaire est valide.
        return true;
    }
</script>

RECAPTCHA
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LdwQmEpAAAAAO_0atxrrc7_b1bU1ne9dRK7JyEr', {action: 'LOGIN'});
    });
  }
</script>
</body>

</html>