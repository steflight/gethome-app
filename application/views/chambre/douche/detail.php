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
<table style="width:100%">
  <tr>
    <th>info de base</th>
    <th>localisation</th>
    <th>Pays</th>
    <th>caracteristiques</th>
  </tr>

  <tr>
        <td><?= $chambre->nom_cite ?></td>
        <td><?= $chambre->prix ?></td>
    </tr>
    <tr>
        <td><?= $chambre->ville ?></td>
        <td><?= $chambre->pays ?></td>
    </tr>
    <tr>
        <td><?php var_dump(unserialize($chambre->preference)) ?></td>
        <tr><td><?php echo $caracteristique["cuisine"]["position"]; ?></td></tr>
        <tr><td><?php echo $caracteristique["cuisine"]["appartenance"]; ?></td></tr>
        <tr><td><?php echo $caracteristique["cuisine"]["luxe"]; ?></td></tr>
        <tr><td><?php echo $caracteristique["douche"]["luxe"]; ?></td></tr>
        <tr><td><?php echo $caracteristique["douche"]["appartenance"]; ?></td></tr>
    </tr>


</table>
<a href="<?= site_url("chambre/edit?id=$chambre->id") ?>"> editer </td></a>

<br>

