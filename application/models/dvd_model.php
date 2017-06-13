<?php
class Dvd_model extends CI_Model {
     
    public function __construct() {
        $this->load->database();
    }
    public function get_Dvd() {
        $sql = "SELECT * FROM dvd";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function get_DvdOfTheMonth() {
        $sql = "SELECT *
FROM dvd
WHERE nbr_exemplaire < 50;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function set_DVD() {
        $data = [
          'titre' => $this->input->post('titre'),  
          'auteur' => $this->input->post('auteur'),  
          'societe' => $this->input->post('societe'),  
          'annee_sortie' => $this->input->post('annee_sortie'),  
          'fk_Categorie' => $this->input->post('fk_Categorie'),  
          'nbr_exemplaire' => $this->input->post('nbr_exemplaire'),  
        ];
        
        return $this->db->insert('dvd',$data);
    }
}

