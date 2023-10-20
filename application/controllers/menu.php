<?php
class Menu extends CI_Controller
{
    public function index()
    {

    $this->load->view('view_input_menu');
    }
    
    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode', 'Kode Menu', 'required|min_length[3]', 
        [
            'required' => 'Kode Menu Harus diisi',
            'min_length' => 'Kode terlalu pendek'
]);

        $this->form_validation->set_rules(
            'menu', 'Nama Menu', 'required|min_length[3]', 
        [
            'required' => 'Nama Menu Harus diisi',
            'min_length' => 'Nama terlalu pendek'
]);

        $this->form_validation->set_rules(
            'harga', 'Nama Harga', 'required|min_length[3]|numeric', 
        [
            'required' => 'Harga Harus diisi',
            'min_length' => 'Harga terlalu pendek'
]);

        $this->form_validation->set_rules(
            'file', 'gambar', 'required', 
        [
            'required' => 'Gambar Harus diisi'
]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view_input_menu');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'menu' => $this->input->post('menu'),
                'harga' => $this->input->post('harga'),
                'file' => $this->input->post('file')
            ];

        $this->load->view('view_tampil_menu', $data);
        }
    }
}