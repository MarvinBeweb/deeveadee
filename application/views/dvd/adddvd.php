
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('dvd/adddvd'); ?>

<label for="titre">Titre</label>
<input type="input" name="titre" /><br />

<label for="auteur">Réalisateur</label>
<input type="input" name="auteur" /><br />

<label for="societe_edition">Société de distrubution</label>
<input type="input" name="societe_edition" /><br />

<label for="annee_sortie">Année Sortie</label>
<input <input type="number" min="1900" max="2099" step="1" name="annee_sortie"/><br />

<label for="fk_categorie">Genre</label>
<input type="input" name="fk_categorie" /><br />

<label for="nbr_exemplaire">Nombre(s) d'exemplaire(s)</label>
<input type="number" name="nbr_exemplaire" /><br />

<input type='submit' name="submit" value="Ajouter un dvd"/>