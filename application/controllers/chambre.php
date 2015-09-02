<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 27/08/2015
 * Time: 02:04
 */

class chambre extends CI_Controller
{
    public $cuisine;
    public $douche ;

    public function __construct()
    {
        parent::__construct();
        $this->cuisine = new cuisine();
        $this->douche = new douche();
    }

    public function index()
    {
        var_dump($this->set());
    }

    public function set()
    {
        if ($this->form_validation->run('chambre') == FALSE)
        {
            $this->load->view('chambre/create');
        }
        else
        {
            $name = $this->input->post('nom_cite');
            $prix = $this->input->post('prix');
            $ville = $this->input->post('ville');
            $pays = $this->input->post('pays');
            $quartier = $this->input->post('quartier');
            $caracteristiques = $this->input->post('caracteristiques');

            // verification cuisine

            $c_luxe = $this->input->post('c_luxe');
            $c_position = $this->input->post('c_position');
            $c_appartenance = $this->input->post('c_appartenance');
            $c_description = $this->input->post('c_description');

            $d_luxe = $this->input->post('d_luxe');
            $d_position = $this->input->post('d_position');
            $d_appartenance = $this->input->post('d_appartenance');
            $d_description = $this->input->post('d_description');

            $id_chambre = 1;

            $data_chambre = array(
                'nom_cite'=> $name,
                'prix'=> $prix,
                'ville'=> $ville,
                'pays'=> $pays,
                'quartier'=> $quartier,
            );

            $data_cuisine = array(
                'luxe'=> $c_luxe,
                'appartenance'=> $c_appartenance,
                'description'=> $c_description,
                'position'=> $c_position,
                'id_chambre'=> $id_chambre,
            );

            $data_douche = array(
                'luxe'=> $d_luxe,
                'appartenance'=> $d_appartenance,
                'description'=> $d_description,
                'position'=> $d_position,
                'id_chambre'=> $id_chambre,
            );

            $id_chambre = $this->chambre->set('chambre',$data_chambre);
            $data_douche["id_chambre"] = $id_chambre;
            $data_cuisine["id_chambre"] = $id_chambre;
            $this->chambre->set('cuisine',$data_cuisine);
            $this->chambre->set('douche',$data_douche);
            var_dump($id_chambre);

            //$this->chambre->set('cuisine',$data_chambre);
            //$this->chambre->set('douche',$data_chambre);

            redirect('chambre/get');

        }

    }

    public function get_cuisine()
    {

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
        $cuisine = $this->chambre->getbyid_chambre('cuisine',$id);
        $douche = $this->chambre->getbyid_chambre('douche',$id);
        $data = array(
            "chambre" => $detail_chambre,
            "douche" => $cuisine,
            "cuisine" => $douche,
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
            $this->chambre->edit("chambre",$data,$id);
            redirect('chambre/get');

        }
    }

    public function search()
    {

    }
}