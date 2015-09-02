<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 26/08/2015
 * Time: 09:00
 */

class homes {
    private $id;
    private $cite;
    private $prix;
    private $region;
    private $ville;
    private $quartier;
    private $eau;
    private $electricite;
    private $equipement;
    private $douche;
    private $cuisine;

    public function getId()
    {
        return $id;
    }
    public function getCite()
    {
        return $cite;
    }
    public function getprix($id)
    {
        return $prix;
    }
    public function getregion()
    {
        return $region;
    }
    public function getville()
    {
        return $ville;
    }
}