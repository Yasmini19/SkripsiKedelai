<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('GeneralModel');
    }

    public function index()
    {   
        $query = $this->GeneralModel->get_data('produksi')->result();
        $produksi = 0;
        foreach ($query as $key) {
            $produksi += $key->jumlah_produksi;
        }

        $query = $this->GeneralModel->get_data('konsumsi')->result();
        $konsumsi = 0;
        foreach ($query as $key) {
            $konsumsi += str_replace(',', '.', $key->jumlah_konsumsi);
        }

        $query = $this->GeneralModel->get_data('harga')->result();
        $harga = 0;
        foreach ($query as $key) {
            $harga += $key->jumlah_harga;
        }

        $query = $this->GeneralModel->get_data('impor')->result();
        $impor = 0;
        foreach ($query as $key) {
            $impor += $key->jumlah_impor;
        }

        $data = [
            'produksi'  => $produksi,
            'konsumsi'  => $konsumsi,
            'harga'     => $harga,
            'impor'     => $impor
        ];

        $this->load->view('Admin/homeAdmin', $data);
    }

    public function grafik(){
        $data['grafik'] = $this->db->query(' SELECT tahun.id_tahun , tahun.tahun_ke, konsumsi.jumlah_konsumsi,impor.jumlah_impor,harga.jumlah_harga, produksi.jumlah_produksi FROM `tahun` join konsumsi on tahun.id_tahun = konsumsi.id_tahun join harga on harga.id_tahun=tahun.id_tahun join impor on impor.id_tahun = tahun.id_tahun join produksi on produksi.id_tahun=tahun.id_tahun ')->result();
          $this->load->view('Admin/grafik',$data);
    }
    //tahun
    public function tahun()
    {
        $data['thn']=$this->GeneralModel->get_data('tahun')->result();

        $this->load->view('Admin/tahun', $data);
    }


    public function add_tahun() 
    {
        $result = 'false';
        $data =  array(
                        'tahun_ke' => $this->input->post('tahun_ke') 
                  );

        if ($this->GeneralModel->add_data('tahun', $data)) {

         $result = 'true';

    }
    echo json_encode($result);

    }


     public function get_tahun()
    {
        $id = $this->input->post('id');
        $data = $this->GeneralModel->get_selected('tahun', array('id_tahun' => $id))->row();
        
        echo json_encode($data);
    }


     public function edit_tahun()
    {


       $id  = array('id_tahun' => $this->input->post('edit_id'));

       $data = array(
        'tahun_ke' => $this->input->post('edit_tahun_ke')
        
       );

       $result = $this->GeneralModel->update_data('tahun', $data, $id);

       echo json_encode($result);
    }

      public function delete_tahun()
    {
        $id = array('id_tahun' => $this->input->post('id') );
        $result = $this->GeneralModel->delete_data($id,'tahun');
        echo json_encode($result);
    }


    //produksi
    public function produksi()
    {
        $data['prodks'] = $this->GeneralModel->get_join('produksi','tahun','id_tahun')->result();
        // $data['prodks'] = $this->GeneralModel->get_data('produksi')->result();
        $data['thn'] = $this->GeneralModel->get_data('tahun')->result();
        $this->load->view('Admin/produksi', $data);
    }
    //tambah produksi
    public function add_produksi() 
    {
        $result = 'false';
        $data =  array(
                    'id_tahun'   => $this->input->post('id_tahun'),
                    'jumlah_produksi' => $this->input->post('jumlah_produksi') 
                  );

        if ($this->GeneralModel->add_data('produksi', $data)) {

         $result = 'true';

    }
    
    echo json_encode($result);

    }

    public function get_produksi()
    {
        $id = $this->input->post('id');
        $data = $this->GeneralModel->get_selected('produksi', array('id_produksi' => $id))->row();
        
        echo json_encode($data);
    }

    //edit produksi

    public function edit_produksi()
    {


       $id  = array('id_produksi' => $this->input->post('edit_id'));

       $data = array(
        'id_tahun' => $this->input->post('edit_tahun_produksi') ,
        'jumlah_produksi' => $this->input->post('edit_jumlah_produksi') 
       );

       $result = $this->GeneralModel->update_data('produksi', $data, $id);

       echo json_encode($result);
    }

    //delete prduksi

    public function delete_produksi()
    {
        $id = array('id_produksi' => $this->input->post('id') );
        $result = $this->GeneralModel->delete_data($id,'produksi');
        echo json_encode($result);
    }
    
    //konsumsi
    public function konsumsi()
    {
        $data['konsm'] = $this->GeneralModel->get_join('konsumsi','tahun','id_tahun')->result();
         $data['thn'] = $this->GeneralModel->get_data('tahun')->result();

        // $data ['konsm'] = $this->GeneralModel->get_data('konsumsi')->result();
        $this->load->view('Admin/konsumsi', $data);
    }

    //tambah konsumsi

    public function add_konsumsi()
    {
        $result = 'false';
        $data = array(
                         'id_tahun'   => $this->input->post('id_tahun'),
                        'jumlah_konsumsi' => $this->input->post('jumlah_konsumsi')
                    );

        if ($this->GeneralModel->add_data('konsumsi', $data)) {

         $result = 'true';

     }
        echo json_encode($result);
    }

    public function get_konsumsi()
    {
        $id = $this->input->post('id');
        $data = $this->GeneralModel->get_selected('konsumsi',  array('id_konsumsi' => $id)) -> row();

        echo json_encode($data);
    }

    //edit konsumsi

    public function edit_konsumsi()
    {
       $id  = array('id_konsumsi' => $this->input->post('edit_id'));

       $data = array(
        'id_tahun' => $this->input->post('edit_tahun_konsumsi') ,
        'jumlah_konsumsi' => $this->input->post('edit_jumlah_konsumsi') 
       );

       $result = $this->GeneralModel->update_data('konsumsi', $data, $id);

       echo json_encode($result);
    }


    //delete konsumsi

    public function delete_konsumsi()
    {
        $id = array('id_konsumsi' => $this->input->post('id'));
        $result = $this->GeneralModel->delete_data($id, 'konsumsi');

        echo json_encode($result);
    }

    // harga

     public function harga()
     {
         $data['hrg'] = $this->GeneralModel->get_join('harga','tahun','id_tahun')->result();
         $data['thn'] = $this->GeneralModel->get_data('tahun')->result();

        // $data ['hrg'] = $this->GeneralModel->get_data('harga')->result();
        $this->load->view('Admin/harga', $data);
     }


     //tambah harga

     public function add_harga()
     {
        $result = 'false';
        $data = array(
                        'id_tahun' => $this->input->post('id_tahun'),
                        'jumlah_harga' => $this->input->post('jumlah_harga') 
                     );

        if ($this->GeneralModel->add_data('harga', $data)) {

         $result = 'true';
        }

        echo json_encode($result);

     }


     public function get_harga()
     {
        $id = $this->input->post('id');
        $data = $this->GeneralModel->get_selected('harga',  array('id_harga' => $id)) -> row();

        echo json_encode($data);
     }

     //edit harga

     public function edit_harga()
     {
        $id = array('id_harga' =>$this->input->post('edit_id'));

        $data = array(
                        'id_tahun' => $this->input->post('edit_tahun_harga') ,
                        'jumlah_harga' => $this->input->post('edit_jumlah_harga') 
                     );

        $result = $this->GeneralModel->update_data('harga', $data, $id);

        echo json_encode($result);
     }

     //delete harga

     public function delete_harga()
     {
        $id = array('id_harga' => $this->input->post('id') );
        $result = $this->GeneralModel->delete_data( $id,'harga');

        echo json_encode($result);
     }

     //impor

     public function impor()
     {

         
        $data ['impr'] = $this->GeneralModel->get_join('impor','tahun','id_tahun')->result();
        $data['thn'] = $this->GeneralModel->get_data('tahun')->result();
        $this->load->view('Admin/impor', $data);
     }


     //tambah impor

     public function add_impor()
     {
       $result = 'false';
        $data = array(
                        'id_tahun' => $this->input->post('id_tahun'),
                        'jumlah_impor' => $this->input->post('jumlah_impor') 
                     );

        if ($this->GeneralModel->add_data('impor', $data)) {

         $result = 'true';
        }

        echo json_encode($result);

     }


     public function get_impor()
     {
        $id = $this->input->post('id');
        $data = $this->GeneralModel->get_selected('impor',  array('id_impor' => $id)) -> row();

        echo json_encode($data);
     }

     //edit impor

     public function edit_impor()
     {
        $id = array('id_impor' =>$this->input->post('edit_id'));

        $data = array(
                        'id_tahun' => $this->input->post('edit_tahun_impor') ,
                        'jumlah_impor' => $this->input->post('edit_jumlah_impor') 
                     );

        $result = $this->GeneralModel->update_data('impor', $data, $id);

        echo json_encode($result);
     }

     //delete impor

     public function delete_impor()
     {
        $id = array('id_impor' => $this->input->post('id') );
        $result = $this->GeneralModel->delete_data( $id,'impor');

        echo json_encode($result);
     }

      public function tabel_basic()
     {
        $this->load->view('Admin/tabel-basic');
     }

}
?>