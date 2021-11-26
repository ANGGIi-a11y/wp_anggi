<?php
class TokoSepatu extends CI_Controller
{
	public function index()
	{
		$this->load->view('view-form-TokoSepatu');
	}

	public function cetak()
	{
		$this->form_validation->set_rules(
			'nama',
			'nama',
			'required|min_length[3]',
			[
				'required'=> 'Nama Harus Diisi',
				'min_length' => 'Nama Terlalu Pendek']
			);
		$this->form_validation->set_rules(
			'nomor',
			'nomor hp',
			'required|min_length[11]',
			[
				'required' => 'No HP Harus Diisi',
				'min_length' => 'No HP terlalu pendek']
			);

		if ($this->form_validation->run() != true) {
			$this->load->view('view-form-TokoSepatu');
		} else {
			$data = [
				'Nama' => $this->input->post('Nama'),
                'No' => $this->input->post('No'),
                'Merk' => $this->input->post('Merk'),
                'Size' => $this->input->post('Size'),
                'Harga' => $this->input->post('Harga'),
            ];

             if ($this->input->post('merk') == 'Nike') {
                $data['Harga'] = 375000;
            } elseif ($this->input->post('Merk') == 'Adidas') {
                $data['Harga'] = 300000;
            } elseif ($this->input->post('Merk') == 'Kickers') {
                $data['Harga'] = 250000;
            } elseif ($this->input->post('Merk') == 'Eiger') {
                $data['Harga'] = 275000;
            } elseif ($this->input->post('Merk') == 'Bucherri') {
                $data['Harga'] = 400000;
            }

            $this->load->view('view-form-TokoSepatu', $data);
		}
	}
}