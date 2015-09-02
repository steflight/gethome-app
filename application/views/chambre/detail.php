<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 27/08/2015
 * Time: 03:44
 */
?>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
    width: 100%;
    background-color: #f1f1c1;
}
</style>



<a href="<?php $caracteristique = unserialize($chambre->preference); echo site_url("chambre/get") ?>"> Retourner à la liste </a>
<a href="<?= site_url("chambre/edit?id=$chambre->id") ?>"> editer </td></a>
<p>
    <div>Nom cité</div>
    <div><?= $chambre->nom_cite ?></div>
</p>
<p>
    <div>Prix</div>
    <div><?= $chambre->prix ?></div>
</p>
<p>
    <div>ville</div>
    <div><?= $chambre->ville ?></div>
</p>
<p>
    <div>pays</div>
    <div><?= $chambre->pays ?></div>
</p>
<p>
    <div>douche luxe</div>
    <div><?= $douche->luxe ?></div>
</p>
<p>
    <div>douche position</div>
    <div><?= $douche->position ?></div>
</p>
<p>
    <div> douche appartenance</div>
    <div><?= $douche->appartenance ?></div>
</p>
<p>
    <div>Douche description</div>
    <div><?= $douche->description ?></div>
</p>
<p>
    <div>cuisine luxe</div>
    <div><?= $cuisine->luxe ?></div>
</p>
<p>
    <div>cuisine appartenance</div>
    <div><?= $cuisine->appartenance ?></div>
</p>



<a href="<?= site_url("chambre/edit?id=$chambre->id") ?>"> editer </td></a>

<br>

