<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rates extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rates_model');
    }

    public function index()
    {
        $this->output->cache(10);

        $data['title'] = 'Курс валют';
        $data['rates'] = json_decode(file_get_contents(
            'https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11'),
            JSON_PRETTY_PRINT
        );
        $this->rates_model->setRates($data['rates']);

        $this->load->view('templates/header', $data);
        $this->load->view('rates/index', $data);
        $this->load->view('templates/footer');
    }
}
