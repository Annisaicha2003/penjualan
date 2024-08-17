<?php
defined ('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'third_party/fpdf/fpdf.php');
class Barang extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Barang_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title'   => 'View Data Barang',
            'barang'  => $this->Barang_model->getAll(),
            'content' => 'barang/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title'   => 'Tambah Data Barang',
            'content' => 'barang/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function save()
    {
        $this->Barang_model->Save();
        if ($this->db->affected_rows()>0) {
            $this->session->set_flashdata('success', 'Data Barang berhasil disimpan');
        }
        redirect('barang');
    }

    public function getedit($id)
    {
        $data = array(
            'title'   => 'Update Data Barang',
            'barang'  => $this->Barang_model->getById($id),
            'content' => 'barang/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    public function edit()
    {
            $this->Barang_model->editData();
            if ($this->db->affected_rows()>0) {
                $this->session->set_flashdata('success', 'Data barang berhasil diupdate');
            }
            redirect('barang');
        }

        public function delete($id)
        {
            $this->Barang_model->delete($id);
            redirect('barang');
        }
}
?>
