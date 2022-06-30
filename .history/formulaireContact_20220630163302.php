<?php include("header.php") ?>
<?php 
if (isset($_POST["message"])) {
  $message = "Message envoyé"
mail("michel.hof@hotmail.fr", $_POST["message"], $_POST["objet"],"From:contact@cvmichel-hoffmann.fr\r\nReply-to:" . $_POST["email"]);

if ($retour) {
  echo "<p>L'email a bien été envoyé</p>";
}
}
?>

<!--Corps du site-->
<div class="corps size20">
<h2 class="size40 borderBottomDark">Me contacter</h2>

<div>
  <form action="#" method="POST">
    <fieldset>
      <legend>Renseigner les informations</legend>

    <div>
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" placeholder="Nom / Prenom" required/>
  </div>

  <div>
    <label for="mail">Email:</label>
    <input type="email" name="mail" id="mail" placeholder="nom@exemple.com" required/>
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

  <?php 
  
  ?>
</div>
</div>
<!--Footer du site-->
<?php include("footer.php") ?>