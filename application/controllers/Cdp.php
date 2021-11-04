<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdp extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
        $this->load->model('Cdp_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['no1'] = $this->Cdp_model->no1();
        $data['no2'] = $this->Cdp_model->no2();

        // NO 3
        $input = "C0001,C0002,B0003,B0004,";
        $mydata = explode(',', $input);
        $jumlah = 0;

        // echo "Output:<br>";
        for ($i=0; $i < count($mydata); $i++) { 
            if($mydata[$i] !== ''){
                // echo $mydata[$i] . "<br>";
                $jumlah++;
            }
        }
        // echo "<br>Count Row:<br>";
        // echo $jumlah;
        // AKHIR

        $data['no4'] = $this->Cdp_model->no4();

        $this->load->view('templates/header');
        $this->load->view('cdp/index', $data);
        $this->load->view('templates/footer');
    }

    public function create(){
        $data['judul'] = 'Tambah Data';

        $this->form_validation->set_rules('container_no', 'No. Container', 'required|trim|is_unique[container.container_no]', [
            'required' => '* Wajib di isi',
            'is_unique' => '* No. Container ini sudah terdaftar'
        ]);
        $this->form_validation->set_rules('type', 'Type', 'required|trim', [
            'required' => '* Wajib di isi',
        ]);
        $this->form_validation->set_rules('size', 'Size', 'required|trim', [
            'required' => '* Wajib di isi',
        ]);
        $this->form_validation->set_rules('gate_in', 'Gate In', 'required|trim', [
            'required' => '* Wajib di isi',
        ]);

        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('cdp/create', $data);
            // $this->load->view('cdp/create2', $data);
            $this->load->view('templates/footer');
            
        } else {
            $this->Cdp_model->save();
            $this->session->set_flashdata('sukses', 'Data Berhasil Simpan');
            redirect('cdp');
        }
    }

    public function update($id){
        $data['judul'] = 'Update Data';

        $this->form_validation->set_rules('container_no', 'No. Container', 'required|trim', [
            'required' => '* Wajib di isi',
        ]);
        $this->form_validation->set_rules('type', 'Type', 'required|trim', [
            'required' => '* Wajib di isi',
        ]);
        $this->form_validation->set_rules('size', 'Size', 'required|trim', [
            'required' => '* Wajib di isi',
        ]);
        $this->form_validation->set_rules('gate_in', 'Gate In', 'required|trim', [
            'required' => '* Wajib di isi',
        ]);

        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('cdp/update', $data);
            $this->load->view('templates/footer');
            
        } else {
            $this->Cdp_model->update($id);
            $this->session->set_flashdata('info', 'Data Berhasil Diubah');
            redirect('cdp');
        }
    }

    public function delete($id)
    {
        $this->db->delete('container', ['id' => $id]);
        $this->session->set_flashdata('warning', 'Data Berhasil DIhapus');
        redirect('cdp');
    }
    
}