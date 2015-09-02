<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 27/08/2015
 * Time: 02:04
 */

class douche extends CI_Model
{
    public $cuisine;
    public $douche ;
    public $table;
    public $entity;

    public function __construct()
    {
        parent::__construct();
        $this->table = "douche";
        $this->entity = "douche";
    }

    public function index()
    {
        var_dump($this->set());

    }

    public function set()
    {
            $luxe = $this->input->post('luxe');
            $position = $this->input->post('position');
            $appartenance = $this->input->post('appartenance');
            $description = $this->input->post('description');
            // $id_chambre = $this->input->post('id_chambre');
            $id_chambre = 1;


            $data_douche = array(
                'luxe'=> $luxe,
                'appartenance'=> $appartenance,
                'description'=> $description,
                'position'=> $position,
                'id_chambre'=> $id_chambre,
            );

        return $data_douche;

           // $this->chambre->set($this->table,$data_cuisine);
           // redirect('chambre/get');
    }

    public function get()
    {
        /**
         * chambre est l'alias de chambre_model dans l'autoload
         */
        $list_chambre =  $this->chambre->get('chambre');
        $data = array(
            "chambres" => $list_chambre,
        );

        $this->load->view('chambre/list',$data);
    }

    public function get_detail()
    {
        $id = $this->input->get('id');
        $detail_chambre = $this->chambre->getbyid('chambre',$id);
        $data = array(
            "chambre" => $detail_chambre,
        );

        $this->load->view('chambre/detail',$data);
    }

    public function edit()
    {

        $id = $this->input->get('id');

        if ($this->form_validation->run('cuisine') == FALSE)
        {
            $id = $this->input->get('id');
            $detail_chambre = $this->chambre->getbyid('chambre',$id);
            $data = array(
                'id'=>$id,
                "chambre" => $detail_chambre,
            );
            $this->load->view('chambre/edit',$data);
        }
        else
        {
            $table = "douche";
            $name = $this->input->post('nom_cite');
            $prix = $this->input->post('prix');
            $ville = $this->input->post('ville');;
            $pays = $this->input->post('pays');
            $caracteristiques = $this->input->post('caracteristiques');
            $id = $this->input->post('id');

            $data = array(
                'nom_cite' => $name,
                'prix' => $prix,
                'ville' => $ville,
                'pays' => $pays,
                'caracteristique' => $caracteristiques
            );
            $this->chambre->edit($table,$data,$id);
            redirect('chambre/get');

        }
    }

    public function search()
    {

    }
}