<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rates_model');
    }

    public function index()
    {
        $data['title'] = 'История курса валют';
        $data['history'] = $this->rates_model->getRates();

        $this->load->view('templates/header', $data);
        $this->load->view('rates/history', $data);
        $this->load->view('templates/footer');
    }

}