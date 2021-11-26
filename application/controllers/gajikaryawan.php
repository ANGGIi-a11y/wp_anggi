<?php
class gajikaryawan extends CI_Controller
{
    public function __construct() {
        parent:: __construct();
        $this->load->model('model_gaji');
    }
    public function index()
    {
      $data['judul'] = 'Form Input Gaji';
      $data['k_jabatan'] = ['J01', 'J02', 'J03', 'J04', 'J05', 'J06'];
      $data['status'] = ['MENIKAH', 'BELUM MENIKAH'];
      $this->load->view('view-form-karyawan', $data);
      $this->load->helper('url');
    }



public function cetak()
{
    $data = [
        'nik' => $this->input->post('nik'),
        'nama' => $this->model_gaji->nama($this->input->post('nik')),
        'jabatan' => $this->model_gaji->jabatan($this->input->post('jabatan')),
        'gaji' => $this->model_gaji->gaji($this->input->post('jabatan')),
        'status' => $this->input->post('status'),
        'tunjangan' => $this->model_gaji->tun($this->input->post('status'), $this->input->post('anak')),
        'potongan' => $this->model_gaji->potongan($this->input->post('jabatan'))
    ];

    $this->load->view('view-data-karyawan', $data);
}
}