<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 26/08/2015
 * Time: 13:31
 */

?>



<?php echo form_open(current_url()); echo current_url(); ?>

<h5>Nom_cite</h5>
<input type="text" name="nom_cite" value="<?= $chambre->nom_cite ?>" size="50" />
<?php echo form_error('nom_cite','<span class="alert alert-error">', '</span>'); ?>

<h5>prix</h5>
<input type="integer" name="prix" value="<?= $chambre->prix ?>" size="50" />
<?php echo form_error('prix','<span class="alert alert-error">', '</span>'); ?>

<h5>pays</h5>
<input type="text" name="pays" value="<?= $chambre->pays ?>" size="50" />
<?php echo form_error('pays','<span class="alert alert-error">', '</span>'); ?>

<h5>Ville</h5>
<input type="text" name="ville" value="<?= $chambre->ville ?>" size="50" />
<?php echo form_error('ville','<span class="alert alert-error">', '</span>'); ?>

<h5>Region </h5>
<input type="text" name="region" value="<?= $chambre->ville ?>" size="50" />
<?php echo form_error('region','<span class="alert alert-error">', '</span>'); ?>

<h5>Quartier</h5>
<input type="text" name="quartier" value="<?= $chambre->quartier ?>" size="50" />
<?php echo form_error('quartier','<span class="alert alert-error">', '</span>'); ?>



<input type="hidden" name="id" value="<?= $id ?>" size="50" />



<div><input type="submit" value="Mettre à jour" name="enregistrer" /></div>
<div><a href="<?= site_url('chambre/get')  ?>">Annuler</a></div>

</form>


