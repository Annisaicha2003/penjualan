<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kustomer extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Kustomer_model");
        $this->load->library('form_validation');
    }
	public function index()
	{
        $data = array(
            'title'   => 'View Data Kustomer',
            'kustomer'    => $this->Kustomer_model->getAll(),
            'content' => 'kustomer/index'
        );
		$this->load->view('template/main', $data);
	}
    public function add()
	{
        $data = array(
            'title'   => 'Tambah Data kustomer',
            'content' => 'kustomer/add_form'
        );
		$this->load->view('template/main', $data);
	}
    public function save()
    {
        $this->Kustomer_model->Save();
        if ($this->db->affected_rows()>0) {
            $this->session->set_flashdata('success', 'Data kustomer berhasil disimpan');
        }
        redirect('kustomer');
    }
    public function getedit($id)
	{
        $data = array(
            'title'   => 'Update Data kustomer',
            'kustomer'    => $this->Kustomer_model->getById($id),
            'content' => 'kustomer/edit_form'
        );
		$this->load->view('template/main', $data);
	}

    public function Kustomerlap()
    {
        $pdf = new FPDF('p', 'mm', 'A4');
        $pdf-> AddPage();
        $pdf->SetFont('Times','B',18);
        $pdf->SetFont('Times', 'B',14);
        $pdf->Cell(0,5,'LAPORAN DATA KUSTOMER',0,1,'C');
        $pdf->Cell(30,8,'',0,1);
        $pdf->SetFont('Times','B',9);
        $pdf->Cell(7,6,'No',1,0);
        $pdf->Cell(37,6,'Nik',1,0, 'C');
        $pdf->Cell(37,6,'Nama kustomer',1,0, 'C');
        $pdf->Cell(30,7,'Telp',1,0, 'C');
        $pdf->Cell(45,6,'Alamat',1,1, 'C');
        $i=1;
        $data = $this->db->get('kustomer')->result_array();
        foreach($data as $d){
            $pdf->SetFont('Times','',9);
            $pdf->Cell(7,6,$i++,1,0);
        }

    }
    public function edit()
    {
        $this->Kustomer_model->editData();
        if ($this->db->affected_rows()>0) {
            $this->session->set_flashdata('success', 'Data kustomer berhasil diupdate');
        }
        redirect('kustomer');
    }
    
    public function delete($id)
    {
        $this->Kustomer_model->delete($id);
        redirect('kustomer');
    }

}
?>