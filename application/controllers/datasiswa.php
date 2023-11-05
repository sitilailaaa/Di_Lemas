<?php
    class datasiswa extends CI_Controller 
    {
        public function index()
        {
            $this->load->view("view-form-datasiswa");
        }
        public function cetak()
        {
            $this->form_validation->set_rules("nama","nama siswa","required|min_length[3]", [
                "required"=> "Nama Siswa Wajib diisi",
                "min_lenght"=> "Nama Terlalu pendek",]);
            $this->form_validation->set_rules("nis","nis","required|min_length[3]",[
                "required"=> "Nis Wajib diisi",
                "min_lenght"=> "Nis Terlalu pendek",]);
            if ($this->form_validation->run() != true) {
                $this->load->view("form-input");
            }else{
                $data_siswa =[
                    "nama" => $this->input->post("nama"),
                    "nis" => $this->input->post("nis"),
                    "kelas" => $this->input->post("kelas"),
                    "tanggal"=> $this->input->post("tanggal"),
                    "tempat"=> $this->input->post("tempat"),
                    "alamat"=> $this->input->post("alamat"),
                    "jk"=> $this->input->post("jk"),
                    "agama"=> $this->input->post("agama"),
                ];
                $this->load->view("view-datasiswa", $data_siswa);
            }
        }   
    }
?>
