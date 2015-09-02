<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 27/08/2015
 * Time: 02:39
 */

$config = array(
    'chambre' => array(
        array(
            'field' => 'nom_cite',
            'label' => 'Nom cite',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'prix',
            'label' => 'Prix',
            'rules' => 'required|integer|trim'
        ),
        array(
            'field' => 'pays',
            'label' => 'pays',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'ville',
            'label' => 'ville',
            'rules' => 'required|trim'
        )
    ),
    'cuisine' => array(
        array(
            'field' => 'ville',
            'label' => 'ville',
            'rules' => 'trim'
        )
    ),
    'douche' => array(
        array(
            'field' => 'ville',
            'label' => 'ville',
            'rules' => 'trim'
        )
    ),



);