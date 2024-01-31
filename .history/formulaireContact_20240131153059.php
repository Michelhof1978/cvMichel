<form action="#" method="POST">
  <fieldset>
    <legend class="lead">Renseigner les informations</legend>

    <div class="mb-3 lead">
      <label for="nom">Nom:</label>
      <input type="text" name="nom" id="nom" placeholder="Nom / Prénom" required />
    </div>

    <div class="mb-3 lead">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" placeholder="nom@exemple.com" required />
    </div>

    <div class="mb-3 lead">
      <label for="telephone">Téléphone:</label>
      <input type="tel" name="telephone" id="telephone" placeholder="Numéro de téléphone" pattern="[0-9]+" title="Veuillez saisir uniquement des chiffres" />
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

    <div class="g-recaptcha" data-sitekey="<VOTRE_CLE_SITE_reCAPTCHA>"></div>

    <input type="submit" value="Envoyer" class="buttonContact" />
  </fieldset>
</form>
