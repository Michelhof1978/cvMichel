<?php include("head.php") ?>
<meta name="description" content="Page d'accueil du CV de Michel HOFFMANN">
<title>Cv Développeur Web Full Stack React/JS Symfony/PHP de Michel Hoffmann</title>
</head>

<?php include("header.php") ?>


<!--Corps du site-->
<div class="corps">

<div class="text-center mt-5">
    <p class="fw-bold lead mb-5">Projet Réalisé de A à Z</p>
    <a href="https://lescaravanesdelabesbre.fr/" target="_blank">
        <img src="images/logoLesCaravanesDeLaBesbre.png" alt="Réalisation" class="logoPal img-fluid" style="width: 15%; margin-top: 50px; margin-bottom: -70px;">
    </a>  

    <a href="https://harmony-digital.fr/" target="_blank">
        <img src="images/logoharmony.png" alt="Réalisation" class="logoPal img-fluid ms-5" style="width: 10%; margin-top: 50px; margin-bottom: -70px;">
    </a>  
</div>

<div class="text-center mt-5">

</div>

<div class="container mb-5">
    <p class="fw-bold lead text-center">Vidéos Clients</p>
    <div class="row g-0 flex-column flex-md-row justify-content-center">

        <div class="col-12 col-md-5 me-md-3 mb-3 mb-md-0">
            <div class="video embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/x11QdyjodtM" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="video-description text-center fw-bold">Projet De Financement Participatif</div>
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="video embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/G-B7-NNemiI" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="video-description text-center fw-bold">Invitation Anniversaire 18 ans</div>
            </div>
        </div>

    </div>
</div>



  <br>
  <div class="text lead bg-light rounded shadow p-4 pb-5 bg-white rounded ms-1 me-1 ">

    <h2 class="colorBlueDark size40 borderBottomDark"><strong>Synthèse</strong></h2>

    <p class="lead">
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Développeur web passionné et autodidacte, je suis animé par une passion créative qui a guidé ma reconversion professionnelle et la poursuite de mes études dans ce domaine. <br>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Doté d'un esprit innovant et d'une forte capacité d'adaptation, je mets à profit mes connaissances et mon apprentissage continu pour élaborer des solutions web qui correpondent le plus possible aux besoins des clients. <br>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Disponible et mobile, je suis prêt à relever de nouveaux défis, que ce soit en collaboration au sein d'une équipe ou de manière indépendante.<br>
      </p>
       <!-- <p class="fw-bold text-center lead">Je suis reconnu RQTH permanent qui ne nécessite aucun aménagement de poste.</p> -->
      

    <h2 class="colorBlueDark size40 borderBottomDark"><strong>Domaine de compétences</strong></h2>

    <br>

    <div class="domaineCompetence lead">
      <table>
        <tr>
          <th class="activity lead"><strong>Compétences</strong></th>
          <th class="activity lead"><strong>Détail</strong></th>
          <th class="activity lead"><strong>Niveau</strong></th>
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


    <h2 class="colorBlueDark size40 borderBottomDark"><strong>Formation</strong></h2>

    <div class="lead">
      Diplôme de niveau 5 : Développement Web Full Stack <br>
      <div class="activity lead">Wild Code School 09/2022 à 12/2023<br>
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

    <h2 class="colorBlueDark size40 borderBottomDark"><strong>Activités personnelles</strong></h2>

    <div>
      Ecologie
      <div class="activity lead mb-2"> Militant et respect de la nature</div>
      Bénévolat
      <div class="activity lead mb-2">Aide aux personnes démunies</div>
      Sport
      <div class="activity lead mb-2">Marche + Vélo + Surf + Yoga</div>
      Musique
      <div class="activity lead mb-2">Ecoute + Concert</div>
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
    // Augmenter le padding de 25% (par rapport à 20px initialement)
    popupDiv.style.cssText = "position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; text-align: center; background: white; padding: 25px; border: 1px solid #ccc; border-radius: 8px;";

    let img = document.createElement("img");
    img.src = "../images/diplome.jpg"; 
    img.style.height = window.innerWidth < 600 ? '100%' : '75%'; // Ajusté de 80% à 100% et de 60% à 75%
    img.style.width = img.style.height;
    popupDiv.appendChild(img);

    let closeButton = document.createElement("button");
    closeButton.textContent = "X";
    // Augmenter la taille de la police de 16px initialement à 20px
    closeButton.style.cssText = "position: absolute; top: 10px; right: 10px; cursor: pointer; border: none; background: transparent; font-size: 20px;";
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

