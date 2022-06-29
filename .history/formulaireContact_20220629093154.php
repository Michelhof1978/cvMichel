<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Formulaire de contact">
  <title>Formulaire de Contacts</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
<!--header-->
 <div class="header">
      <div class="photoPerso">
        <img src="images/logo2.png" alt="logo du site">
      </div>

      <div class="posteRecherche">
          Développeur web 
      </div>

      <div class="infoPerso">
        Michel HOFFMANN <br/>
        4 lotissement la croix rouge <br/>
        03 230 Garnat Sur Engièvre <br/><br/>
        Tèl: 06 66 33 25 88 <br/>
        michel.hof@hotmail.fr
      </div>
</div>
<!--nav--> 
<nav class="bg-colorBlue3">
  <ul>
  <li class="menuInfo">
      <a href="cv.html">Mes informations</a>
  </li>
  <li class="menuExperience">
      <a href="experiencePro.html">Expérience professionnelle</a>
  </li>
  <li class="menuContact">
      <a href="#formulaireContact.html">Formulaire de contact</a>
  </li>
  
</ul>
</nav>

<!--Corps du site-->
<div class="corps size20">
<h2 class="size40 borderBottomDark">Me contacter</h2>

<div>
  <form>
    <fieldset>
      <legend>Renseigner les informations</legend>

    <div>
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" placeholder="Nom / Prenom"/>
  </div>

  <div>
    <label for="mail">Email:</label>
    <input type="email" name="mail" id="mail" placeholder="nom@exemple.com"/>
  </div>

  <div>
    <label for="objet">Objet:</label>
    <select name="objet" id="objet">
      <option>Question</option>
      <option>Autre</option>
      
    </select>
  </div>
  
  <div>
    <label for="message">Message:</label>
    <textarea name="message" id="message"cols="30" rows="5"></textarea>
  </div>
  <input type="submit" value="Valider" class="buttonContact" />
</fieldset>
  </form>
</div>
</div>
<!--Footer du site-->
<div class="footer text-center colorWhite bg-colorBlue3">
  Tous droits réservés
</div>
<?php include("footer.php") ?>
<script src="menu.js"></script>
</body>
</html>