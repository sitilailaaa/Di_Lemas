<?php
class datasiswa extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-datasiswa');
 }
 public function cetak()
 {
 $datasiswa = [
 'Nama Siswa' => $this->input->post('Nama Siswa'),
 'NIS' => $this->input->post('NIS'),
 'Kelas' => $this->input->post('Kelas'),
 'Tanggal Lahir' => $this->input->post('Tanggal Lahir'),
 'Tempat Lahir' => $this->input->post('Tempat Lahir'),
 'alamat' => $this->input->post('alamat'),
 'Jenis Kelamin' => $this->input->post('Jenis Kelamin'),
 'Agama' => $this->input->post('Agama')
 ];
 $this->load->view('view-data-datasiswa',$datasiswa);
  
}
}
