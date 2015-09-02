<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 26/08/2015
 * Time: 13:31
 */

?>



<?php echo form_open(current_url()); ?>

<h5>Nom_cite</h5>
<input type="text" name="nom_cite" value="<?php echo set_value('nom_cite'); ?>" size="50" />
<?php echo form_error('nom_cite','<span class="alert alert-error">', '</span>'); ?>

<h5>prix</h5>
<input type="integer" name="prix" value="<?php echo set_value('prix'); ?>" size="50" />
<?php echo form_error('prix','<span class="alert alert-error">', '</span>'); ?>

<h5>pays</h5>
<input type="text" name="pays" value="<?php echo set_value('pays'); ?>" size="50" />
<?php echo form_error('pays','<span class="alert alert-error">', '</span>'); ?>

<h5>Ville</h5>
<input type="text" name="ville" value="<?php echo set_value('ville'); ?>" size="50" />
<?php echo form_error('ville','<span class="alert alert-error">', '</span>'); ?>

<h5>Region </h5>
<input type="text" name="region" value="<?php echo set_value('region'); ?>" size="50" />
<?php echo form_error('region','<span class="alert alert-error">', '</span>'); ?>

<h5>Quartier</h5>
<input type="text" name="quartier" value="<?php echo set_value('quartier'); ?>" size="50" />
<?php echo form_error('quartier','<span class="alert alert-error">', '</span>'); ?>

<fieldset>
    <legend> cuisine </legend>
    <?php include('cuisine/create.php'); ?>
</fieldset>
<fieldset>
    <legend> Douche </legend>
    <?php include('douche/create.php'); ?>
</fieldset>


<div><input type="submit" value="Enregistrer" name="enregistrer" /></div>
<div><a href="<?= site_url('chambre/get')  ?>">Annuler</a></div>
</form>




