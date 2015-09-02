<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 26/08/2015
 * Time: 13:31
 */

?>



<?php echo form_open(current_url()); ?>

<h5>individuelle</h5>
<?php echo form_radio('appartenance', 'individuel', TRUE); ?>
<h5>commune</h5>
<?php echo form_radio('appartenance', 'individuel', TRUE); ?>

<h5>moderne</h5>
<?php echo form_radio('luxe', 'individuel', TRUE); ?>
<h5>traditionnelle</h5>
<?php echo form_radio('luxe', 'individuel', TRUE); ?>

<h5>interne</h5>
<?php echo form_radio('position', 'interne', TRUE); ?>
<h5>externe</h5>
<?php echo form_radio('position', 'externe', TRUE); ?>

<h5>description</h5>
<?php echo form_input('description'); ?>



<div><input type="submit" value="Enregistrer" name="enregistrer" /></div>
<div><a href="<?= site_url('chambre/get')  ?>">Annuler</a></div>

</form>




