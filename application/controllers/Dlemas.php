<?php 
    class Dlemas extends CI_Controller 
{ 
    public function index() 
{ 
        $this->load->view('view_form_dlemas'); 
} 
    public function cetak() 
{ 
    $data = 

    [ 
        'nama' => $this->input->post('nama'), 
        'nim' => $this->input->post('nim'), 
        'kelas' => $this->input->post('kelas'), 
        'tanggal' => $this->input->post('tanggal'), 
        'tempat' => $this->input->post('tempat'), 
        'alamat' => $this->input->post('alamat'), 
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'agama' => $this->input->post('agama'),
        
    ]; 

    $this->load->view('view_data_dlemas', $data); 
} 

}
