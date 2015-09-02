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



<a href="<?php echo site_url("chambre/set") ?>"> ajouter chambre </a>
<table style="width:100%">
  <tr>
    <th>Nom cite</th>
    <th>Ville</th>
    <th>Pays</th>
    <th>Action</th>
  </tr>
    <?php foreach($chambres as $row){ ?>
  <tr>
    <td><?= $row->nom_cite ?></td>
    <td><?= $row->ville ?></td>
    <td><?= $row->pays ?></td>
    <td>
         <td><a href="<?= site_url("chambre/get_detail?id=$row->id") ?>"> Details </td></a>
         <td><a href="<?= site_url("chambre/edit?id=$row->id") ?>"> editer </td></a>
    </td>
  </tr>
    <?php } ?>
</table>

<br>

