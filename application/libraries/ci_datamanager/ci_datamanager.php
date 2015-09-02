<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 29/08/2015
 * Time: 09:00
 */

namespace datamanager;


class ci_datamanager extends \CI_Controller {

    public $classe;
    public $attribute;
    private $dev_error;
    private $dev_succes;

    public function __construct()
    {
        $this->dev_error = array();
        $this->dev_succes = array();
    }

    /**
     * @param $class
     * @return bool
     * @description permet de verifier si une classe existe.
     * dans la prochaine version, nous gererons le fait que le programmeur ait mal
     * ecris le nom de la classe et on verifiera toute les classes proches de la chaine qu'il aura
     * entrée(avec la fonction qui permet de lister les classes nous utiliserons la fonction de levenstein
     * pour voir la chaine la plus proche)
     */

    public function is_class_exist($class)
    {
        if(class_exists($class))
        {
            $this->classe = $class;
            $this->dev_succes = "cette classe existe";
        }
        else
        {
            $dev_error = "cette classe n'existe pas";
        }
        return class_exists($class);
    }

    /**
     * @param $class
     * @description : permet de recuperer les attribut d'une classe
     */
    public function getAttribute($class)
    {
        $this->attribute = $this->class;
    }
}