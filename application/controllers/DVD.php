<?php
class Dvd extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Dvd_model');
        $this->load->helper('url_helper');
    }
    public function index() {
        $data['title'] = 'deeveadee';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('dvd/index', $data);
        $this->load->view('templates/footer');
    }
    public function dvds() {
        $data['title'] = 'deeveadee';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('dvd/dvd', $data);
        $this->load->view('templates/footer');
    }
    public function getDvd() {
        $dvd = $this->Dvd_model->get_Dvd();
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($dvd));
    }
    public function getDvdOfTheMonth() {
        $dvd = $this->Dvd_model->get_DvdOfTheMonth();
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($dvd));
    }
    public function add() {
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $data['title'] = 'Ajoute un nouveau film';
        $this->form_validation->set_rules('titre', 'Titre', 'required');
        $this->form_validation->set_rules('Auteur', 'réalisteur', 'required');
        $this->form_validation->set_rules('Societe', 'Société de Distribution', 'required');
        $this->form_validation->set_rules('Annee_sortie', 'Année de Sortie', 'required');
        $this->form_validation->set_rules('fk_categorie', 'Genre', 'required');
        $this->form_validation->set_rules('nbr_exemplaire', "Nombre d'exemplaire", 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('DVD/add');
            $this->load->view('templates/footer');
        } else {
            $this->Dvd_model->set_Dvd();
            $this->load->view('DVD/success');
        }
    }
}