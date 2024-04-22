<?php include("head.php") ?>
<meta name="description" content="Page d'accueil du CV de Michel HOFFMANN">
<title>Cv Développeur Web Full Stack React/JS Symfony/PHP de Michel Hoffmann</title>
</head>

<?php include("header.php") ?>


<!--Corps du site-->
<div class="corps">
<div class="text-center mt-5">

    <a href="https://lescaravanesdelabesbre.fr/" target="_blank">
        <img src="images/logoLesCaravanesDeLaBesbre.png" alt="Réalisation Client" class="logoPal img-fluid" style="width: 15%; margin-top: 50px; margin-bottom: -70px;">
    </a>
    <p class="fw-bold lead">Dernier Projet Client Réalisé de A à Z</p>
</div>

  <br>
  <div class="text lead bg-light rounded shadow p-4 pb-5 bg-white rounded ms-1 me-1 ">

    <h2 class="colorBlueDark size40 borderBottomDark">Synthèse</h2>

    <p class="lead">
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Passionné par le développement web, je suis constamment animé par un flux d'idées que je m'efforce de concrétiser. <br>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mon intérêt prononcé pour l'aspect créatif de ce domaine a été le moteur de ma reconversion professionnelle et de la reprise de mes études. <br>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; En tant qu'autodidacte passionné par l'apprentissage continu, je tire profit de mes expériences pour répondre de manière optimale aux attentes des clients.<br>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ma disponibilité pour me déplacer reflète mon enthousiasme à relever de nouveaux défis, que ce soit en collaboration au sein d'une équipe ou en travaillant de manière indépendante.  <br>
      </p>
       <p class="fw-bold text-center lead">Je suis reconnu RQTH permanent qui ne nécessite aucun aménagement de poste.</p>
      

    <h2 class="colorBlueDark size40 borderBottomDark">Domaine de compétences</h2>

    <br>

    <div class="domaineCompetence lead">
      <table>
        <tr>
          <th class="colorBlueLight lead">Compétences</th>
          <th class="colorBlueLight lead">Détail</th>
          <th class="colorBlueLight lead">Niveau</th>
        </tr>

        <tr>
          <td class="lead">Management</td>
          <td class="lead">Gestion d'équipe</td>
          <td class="lead">Confirmé</td>
        </tr>

        <tr>
          <td class="lead">Programation Web</td>
          <td class="lead">Php/Symfony, HTML5, CSS3/Bootstrap, Javascript/React, MySQL, Référencement SEO, Marketing Digital, Logo et Maquette, Git Et Github</td>
          <td class="lead">Confirmé</td>
        </tr>

        <tr>
          <td class="lead">Anglais</td>
          <td class="lead">Lire et écrire</td>
          <td class="lead">Scolaire</td>
        </tr>

        <tr>
          <td class="lead">Allemand</td>
          <td class="lead">Lire et écrire</td>
          <td class="lead">Scolaire</td>
        </tr>

      </table>
    </div>
    <br>


    <h2 class="colorBlueDark size40 borderBottomDark">Formation</h2>

    <div class="lead">
      Diplôme de niveau 5 : Développement Web Full Stack <br>
      <div class="activity lead">Wild Code School 09/2021 à 12/2023<br>
        <hr>
      </div>

      BAC : Restauration <br>
      <div class="activity lead">Sévigné - Gap 09/1998 – 07/1999<br>
        <hr>
      </div>

      CAP / BEP : Restauration <br>
      <div class="activity lead">Sévigné - Gap 09/1996 – 07/1998<br>
        <hr>
      </div>

      BEPC <br>
      <div class="activity lead">Fernand Greg - Champagne/Seine 09/1995 – 07/1996</div>


    </div>
    <br>

    <h2 class="colorBlueDark size40 borderBottomDark">Activités personnelles</h2>

    <div>
      Ecologie
      <div class="activity lead"> Militant et respect de la nature</div>
      Entraide, Associations
      <div class="activity lead">Aide aux plus démunis</div>
      Randonnées
      <div class="activity lead">Marche + Vélo</div>
      Musique
      <div class="activity lead">Ecoute + Concert</div>
      Surf
      <div class="activity lead">Océan</div>
    </div>

  </div>
</div>

<?php include("footer.php") ?>

<script>
  // Fonction pour vérifier si le popup a déjà été affiché aujourd'hui
  function isPopupShown() {
    const date = new Date();
    const dateString = `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()}`;
    return document.cookie.includes(`popupShown=${dateString}`);
  }

  // Fonction pour définir le cookie indiquant que le popup a été affiché aujourd'hui
  function setPopupShown() {
    const date = new Date();
    // Fixer l'expiration à la fin du jour
    date.setHours(23, 59, 59, 999);
    const dateString = `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()}`;
    document.cookie = `popupShown=${dateString}; expires=${date.toUTCString()}; path=/`;
  }

  // Vérifie si le popup n'a pas déjà été montré aujourd'hui
  if (!isPopupShown()) {
    let popupDiv = document.createElement("div");
    popupDiv.style.cssText = "position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; text-align: center; background: white; padding: 20px; border: 1px solid #ccc; border-radius: 8px;";

    let img = document.createElement("img");
    img.src = "../images/diplome."; // Assurez-vous que le chemin de l'image est correct
    img.style.height = window.innerWidth < 600 ? '80%' : '60%';
    img.style.width = img.style.height;
    popupDiv.appendChild(img);

    let closeButton = document.createElement("button");
    closeButton.textContent = "X";
    closeButton.style.cssText = "position: absolute; top: 10px; right: 10px; cursor: pointer; border: none; background: transparent; font-size: 16px;";
    closeButton.onclick = function () {
      document.body.removeChild(popupDiv);
      setPopupShown();
    };
    popupDiv.appendChild(closeButton);

    document.body.appendChild(popupDiv);

    // Optionnel: fermeture automatique après 30 secondes
    setTimeout(function() {
      if (document.body.contains(popupDiv)) {
        document.body.removeChild(popupDiv);
      }
      setPopupShown();
    }, 30000);
  }
</script>
