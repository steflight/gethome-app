<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 26/08/2015
 * Time: 17:11
 */

class chambre_model extends CI_Model
{
    private $table;
    public function __construct()
    {
        $this->table = "chambre";
    }



    public function set($table,$data)
    {
        //$table = "chambre";
        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function edit($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }

    public function get($table)
    {
        $query = $this->db->get($table);
        return $query->result();
    }

    public function getbyid($table,$id)
    {
        $limit = 1;
        $offset = 0;
        $query = $this->db->get_where($table, array('id' => $id), $limit, $offset);
        return $query->row();
    }

    public function getbyid_chambre($table,$id)
    {
        $limit = 1;
        $offset = 0;
        $query = $this->db->get_where($table, array('id_chambre' => $id), $limit, $offset);
        return $query->row();
    }

    public function getbyelement($data = null)
    {

    }



    public function update()
    {

    }
}