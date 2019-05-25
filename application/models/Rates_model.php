<?php

class Rates_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function setRates($ratesArr)
    {
        foreach ($ratesArr as $key => $value) {
            $idCcy = $this->getID($value['ccy']);
            $idBaseCcy = $this->getID($value['base_ccy']);

            $data = array('ccy' => $idCcy, 'base_ccy' => $idBaseCcy, 'price' => $value['buy']);
            $this->db->insert('rates', $data);
        }
    }

    public function getRates()
    {
        $this->db->select('rate_ccy.name as name_ccy, rate_base_ccy.name as name_base_ccy, price, timestamp');
        $this->db->from('rates');
        $this->db->join('rate_names as rate_ccy', 'rate_ccy.id=rates.ccy', 'left');
        $this->db->join('rate_names as rate_base_ccy', 'rate_base_ccy.id=rates.base_ccy', 'left');
        $this->db->order_by('timestamp', 'asc');

        $query = $this->db->get()->result_array();

        return $query;
    }

    private function getID($name)
    {
        $this->db->select('id');
        $this->db->from('rate_names');
        $this->db->where('name', $name);
        $query = $this->db->get()->result_array()[0];

        return (int) $query['id'];
    }
}
