<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 26/08/2015
 * Time: 13:31
 */

?>




<h5>individuelle</h5>

<?php echo form_radio('c_appartenance', 'individuel', TRUE); ?>
<h5>commune</h5>
<?php echo form_radio('c_appartenance', 'individuel', TRUE); ?>

<h5>moderne</h5>
<?php echo form_radio('c_luxe', 'individuel', TRUE); ?>
<h5>traditionnelle</h5>
<?php echo form_radio('c_luxe', 'individuel', TRUE); ?>

<h5>interne</h5>
<?php echo form_radio('c_position', 'interne', TRUE); ?>
<h5>externe</h5>
<?php echo form_radio('c_position', 'externe', TRUE); ?>

<h5>description</h5>
<?php echo form_input('c_description'); ?>



