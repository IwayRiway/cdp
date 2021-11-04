<?php

class Cdp_model extends CI_model
{
    public function no1()
    {
        return $this->db->query("SELECT a.code_cust, a.cust_name, b.fwd_name, a.order_type, a.join_date FROM customer a JOIN forwarder b ON a.code_cust = b.code_cust WHERE a.join_date BETWEEN '2019-10-01' AND '2020-01-02'")->result_array();
    }

    public function no2()
    {
        return $this->db->query("SELECT type, COUNT(type) AS Total_Type, SUM(REPLACE(amount, '.', '')) AS Grand_Total FROM `order` GROUP BY type 
        UNION 
        SELECT 'Total' as type, COUNT(type) AS Total_type, SUM(REPLACE(amount, '.', '')) AS Grand_Total FROM `order`;")->result_array();
    }

    public function no4()
    {
        return $this->db->get('container')->result_array();
    }

    public function save()
    {
        $data = [
            'container_no' => htmlspecialchars($this->input->post('container_no')),
            'type' => htmlspecialchars($this->input->post('type')),
            'size' => htmlspecialchars($this->input->post('size')),
            'gate_in' => htmlspecialchars($this->input->post('gate_in')),
        ];

        $this->db->insert('container', $data);
    }

    public function update($id)
    {
        $data = [
            'container_no' => htmlspecialchars($this->input->post('container_no')),
            'type' => htmlspecialchars($this->input->post('type')),
            'size' => htmlspecialchars($this->input->post('size')),
            'gate_in' => htmlspecialchars($this->input->post('gate_in')),
        ];

        $this->db->update('container', $data, ['id' => htmlspecialchars($this->input->post('id'))]);
    }

}