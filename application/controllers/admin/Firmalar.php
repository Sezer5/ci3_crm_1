<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firmalar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
     public function __construct()
        {   
                    parent::__construct();
                $this->load->library("session");
				$this->load->helper('url');
                $this->load->library('form_validation');
                $this->load->model("Admin_Model");
                $this->load->model("Database_Model");
                $this->load->database();
               
                
         
				
        }
	public function index()
	{
		$this->load->view('admin/login_formu');
        
	}
    public function Firmalar()
	{
		
        $sorgu=$this->db->query("SELECT * FROM firmalar");
        $data["veri"]=$sorgu->result();
                
        $sorgu=$this->db->query("SELECT * FROM sektorler");
        $data["sektorler"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM firma_turleri");
        $data["firma_turleri"]=$sorgu->result();
        
        $this->load->model('Main_model');
        $data['il'] = $this->Main_model->getCity();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/firmalar');
        $this->load->view('admin/_footer');
            
    }
    
    public function getilceler(){ 
    $postData = $this->input->post();
    
    // load model 
    $this->load->model('Main_model');
    
    // get data 
    $data['ilce'] = $this->Main_model->getCityDepartment($postData);
    echo json_encode($data['ilce']);
    }
    
    public function firmalar_duzenle($id)
	{
		
        $sorgu=$this->db->query("SELECT firmalar.*, firma_turleri.tur_adi as firma_tur_adi, sehir.adi as firma_sehir_adi, ilce.adi as firma_ilce_adi, sektorler.sektor_adi as firma_sektorler_adi
    		FROM firmalar
    		LEFT JOIN firma_turleri ON firmalar.firma_turu_id=firma_turleri.Id
    		LEFT JOIN sehir ON sehir.Id=firmalar.il_id
    		LEFT JOIN ilce ON ilce.Id=firmalar.ilce_id
    		LEFT JOIN sektorler ON sektorler.Id=firmalar.sektor_id
    		WHERE  firmalar.Id = '$id'");
        $data["veri"]=$sorgu->result();
        
        $this->load->model('Main_model');
        $data['il'] = $this->Main_model->getCity();
        
        $sorgu=$this->db->query("SELECT * FROM sektorler");
        $data["sektorler"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM firma_turleri");
        $data["firma_turleri"]=$sorgu->result();
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/firmalar_duzenle');
        $this->load->view('admin/_footer');
            
    }
    
    public function firmalar_guncelle()
	{
		$Id=$this->input->post('Id');
        $data=array(
            'firma_turu_id'=>$this->input->post('firma_turu_id'),
            'firma_adi'=>$this->input->post('firma_adi'),
            'cari_kodu'=>$this->input->post('cari_kodu'),
            'tel'=>$this->input->post('tel'),
            'email'=>$this->input->post('email'),
            'web_adres'=>$this->input->post('web_adres'),
            'sektor_id'=>$this->input->post('sektor'),
            'il_id'=>$this->input->post('city'),
            'ilce_id'=>$this->input->post('town'),
            'adres'=>$this->input->post('adres'),
            
        );
            $this->Database_Model->update_data("firmalar",$data,$Id);
             redirect(base_url()."admin/Firmalar/Firmalar_duzenle/$Id");
            
    }
    
    public function firmalar_sil($id)
	{
		
        $this->db->query("DELETE FROM admin WHERE Id=$id");
        redirect(base_url().'admin/Firmalar/Firmalar');
            
    }
    public function firmalar_ekle()
	{
		
        $data=array(
            'firma_turu_id'=>$this->input->post('firma_turu_id'),
            'firma_adi'=>$this->input->post('firma_adi'),
            'cari_kodu'=>$this->input->post('cari_kodu'),
            'tel'=>$this->input->post('tel'),
            'email'=>$this->input->post('email'),
            'web_adres'=>$this->input->post('web_adres'),
            'sektor_id'=>$this->input->post('sektor'),
            'il_id'=>$this->input->post('city'),
            'ilce_id'=>$this->input->post('town'),
            'adres'=>$this->input->post('adres'),
        );
        $this->Database_Model->insert_data("firmalar",$data);
        redirect(base_url().'admin/Firmalar/Firmalar');
            
    }
    
    
    
        
	}
    
