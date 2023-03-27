<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etkinlikler extends CI_Controller {

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
    public function Etkinlikler()
	{
		
        $sorgu=$this->db->query("SELECT etkinlik.*, etkinlik_turleri.tur_adi as etkinlik_tur_adi,etkinlik_turleri.birim as etkinlik_tur_birim,firmalar.firma_adi as etkinlik_firma_adi,admin.ad as etkinlik_temsilci_adi,admin.soyad as etkinlik_temsilci_soyadi,yetkili.ad as etkinlik_yetkili_adi,yetkili.soyad as etkinlik_yetkili_soyadi
    		FROM etkinlik
    		LEFT JOIN etkinlik_turleri ON etkinlik.tur_id=etkinlik_turleri.Id
    		LEFT JOIN firmalar ON etkinlik.firma_id=firmalar.Id
    		LEFT JOIN admin ON etkinlik.temsilci_id=admin.Id
    		LEFT JOIN yetkili ON etkinlik.yetkili_id=yetkili.Id");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM etkinlik_turleri");
        $data["etkinlik_turleri"]=$sorgu->result();
                
        $sorgu=$this->db->query("SELECT * FROM admin");
        $data["admin"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM yetkili");
        $data["yetkili"]=$sorgu->result();
        
        $this->load->model('Main_model');
        $data['firma'] = $this->Main_model->getFirma();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/etkinlikler');
        $this->load->view('admin/_footer');
            
    }
    
    public function getYetkili(){ 
    $postData = $this->input->post();
    
    // load model 
    $this->load->model('Main_model');
    
    // get data 
    $data['yetkili'] = $this->Main_model->getYetkili($postData);
    echo json_encode($data['yetkili']);
    }
    
    public function etkinlikler_duzenle($id)
	{
		
        $sorgu=$this->db->query("SELECT etkinlik.*, etkinlik_turleri.tur_adi as etkinlik_tur_adi,etkinlik_turleri.birim as etkinlik_tur_birim,firmalar.firma_adi as etkinlik_firma_adi,admin.ad as etkinlik_temsilci_adi,admin.soyad as etkinlik_temsilci_soyadi,yetkili.ad as etkinlik_yetkili_adi,yetkili.soyad as etkinlik_yetkili_soyadi
    		FROM etkinlik
    		LEFT JOIN etkinlik_turleri ON etkinlik.tur_id=etkinlik_turleri.Id
    		LEFT JOIN firmalar ON etkinlik.firma_id=firmalar.Id
    		LEFT JOIN admin ON etkinlik.temsilci_id=admin.Id
    		LEFT JOIN yetkili ON etkinlik.yetkili_id=yetkili.Id WHERE etkinlik.Id=$id");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM etkinlik_turleri");
        $data["etkinlik_turleri"]=$sorgu->result();
                
        $sorgu=$this->db->query("SELECT * FROM admin");
        $data["admin"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM yetkili");
        $data["yetkili"]=$sorgu->result();
        
        $this->load->model('Main_model');
        $data['firma'] = $this->Main_model->getFirma();
        
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/etkinlikler_duzenle');
        $this->load->view('admin/_footer');
            
    }
    
    public function etkinlikler_guncelle($id)
	{
		
        $data=array(
            'tur_id'=>$this->input->post('tur_id'),
            'firma_id'=>$this->input->post('firma'),
            'temsilci_id'=>$this->input->post('temsilci_id'),
            'yetkili_id'=>$this->input->post('town'),
            'tur_miktar'=>$this->input->post('tur_miktar'),
            
        );
            $this->Database_Model->update_data("etkinlik",$data,$id);
             redirect(base_url()."admin/etkinlikler/etkinlikler_duzenle/$id");
            
    }
    
    public function etkinlikler_sil($id)
	{
		
        $this->db->query("DELETE FROM etkinlik WHERE Id=$id");
        redirect(base_url().'admin/etkinlikler/etkinlikler');
            
    }
    public function etkinlikler_ekle()
	{
		
        $data=array(
            'tur_id'=>$this->input->post('tur_id'),
            'firma_id'=>$this->input->post('firma'),
            'temsilci_id'=>$this->input->post('temsilci_id'),
            'yetkili_id'=>$this->input->post('town'),
            'tur_miktar'=>$this->input->post('tur_miktar'),
            
        );
        $this->Database_Model->insert_data("etkinlik",$data);
        redirect(base_url().'admin/etkinlikler/etkinlikler');
            
    }
    
    
    
        
	}
    
