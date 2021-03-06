<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanUtama extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('GeneralModel');
    }

    public function index()
    {     $data['grafik'] = $this->db->query(' SELECT tahun.id_tahun , tahun.tahun_ke, konsumsi.jumlah_konsumsi,impor.jumlah_impor,harga.jumlah_harga, produksi.jumlah_produksi FROM `tahun` join konsumsi on tahun.id_tahun = konsumsi.id_tahun join harga on harga.id_tahun=tahun.id_tahun join impor on impor.id_tahun = tahun.id_tahun join produksi on produksi.id_tahun=tahun.id_tahun ')->result();

        $data['tahun'] = $this->db->get('tahun')->result();

        
        $this->load->view('HalamanUtama/Home',$data);
    }

    public function cari()
    {

       $tipe = $this->input->post('tipe');
       $tahun = $this->input->post('tahun');
    		
        if($tipe == "produksi"){
            // jupuk data produksi
            $data['data'] = $this->GeneralModel->get_selected('produksi', array('id_tahun' => $tahun))->result();
        
             echo json_encode($data);
        }
        else if($tipe == "konsumsi"){
            // jupuk data konsumsi
            $data['data'] = $this->GeneralModel->get_selected('konsumsi', array('id_tahun' => $tahun))->result();
            
            echo json_encode($data);
        }
        else if($tipe == "impor"){
            // jupuk data impor
            $data['data'] = $this->GeneralModel->get_selected('impor', array('id_tahun' => $tahun))->result();
        
        echo json_encode($data);
        }
        else if($tipe == "harga"){
            // jupuk data harga
            $data['data'] = $this->GeneralModel->get_selected('harga', array('id_tahun' => $tahun))->result();
        
        echo json_encode($data);
        }
        else{
            var_dump("error");
        }
    }
}
?>