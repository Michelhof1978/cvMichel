<!-- Footer du site -->
<div class=" mb-5 mt-5 row text-center">

<div class="col-2">
  <h3 class="lead">Cv à télécharger</h3>
  <a href="images/cv-michelHoffmann.pdf" download>
    <img src="images/cv.png" alt="Téléchargement CV" title="Téléchargement CV" class="img-fluid">
  </a>
  </div>

  <div class="col-2">
  <h3 class="lead"><strong>OU</strong></h3>
  </div>

  <div class="col-2">
  <h3 class="lead">Jouer à Mario</h3>
  <a href="mario">
    <img src="images/mario.png" alt="jeu Mario" title="jeu Mario" class="img-fluid w-75">
  </a>
  </div>

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
  let cheminComplet = document.location.href;
  let nomDuFichier = cheminComplet.substring(cheminComplet.lastIndexOf("/") + 1);

  const menuLien = document.querySelectorAll("a");
  console.log(menuLien);

  const arrayMenuLien = [...menuLien];

  arrayMenuLien.map((lien, index) => {
    if (lien.getAttribute("href") == nomDuFichier) {
      document.querySelectorAll("a")[index].className += "selected";
    }
  });
</script>



</body>

</html>