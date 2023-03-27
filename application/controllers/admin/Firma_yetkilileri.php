<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firma_yetkilileri extends CI_Controller {

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
    public function Firma_yetkilileri()
	{
		
        $sorgu=$this->db->query("SELECT yetkili.*, firmalar.firma_adi as firma_adi FROM yetkili
		INNER JOIN firmalar ON yetkili.firma_id=firmalar.Id");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM firmalar");
        $data["firmalar"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/firma_yetkilileri');
        $this->load->view('admin/_footer');
            
    }
    public function firma_yetkilileri_duzenle($id)
	{
		
        $sorgu=$this->db->query("SELECT yetkili.*, firmalar.firma_adi as firma_adi FROM yetkili
		INNER JOIN firmalar ON yetkili.firma_id=firmalar.Id WHERE yetkili.Id=$id");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM firmalar");
        $data["firmalar"]=$sorgu->result();
        
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/firma_yetkilileri_duzenle');
        $this->load->view('admin/_footer');
            
    }
    
    public function firma_yetkilileri_guncelle()
	{
		$Id=$this->input->post('Id');
        $data=array(
            'ad'=>$this->input->post('ad'),
            'soyad'=>$this->input->post('soyad'),
            'unvan'=>$this->input->post('unvan'),
            'email'=>$this->input->post('email'),
            'tel'=>$this->input->post('tel'),
            'firma_id'=>$this->input->post('firma_id'),
            
        );
            $this->Database_Model->update_data("yetkili",$data,$Id);
             redirect(base_url()."admin/firma_yetkilileri/firma_yetkilileri_duzenle/$Id");
            
    }
    
    public function firma_yetkilileri_sil($id)
	{
		
        $this->db->query("DELETE FROM yetkili WHERE Id=$id");
        redirect(base_url().'admin/firma_yetkilileri/firma_yetkilileri');
            
    }
    public function firma_yetkilileri_ekle()
	{
		
        $data=array(
            'ad'=>$this->input->post('ad'),
            'soyad'=>$this->input->post('soyad'),
            'unvan'=>$this->input->post('unvan'),
            'email'=>$this->input->post('email'),
            'tel'=>$this->input->post('tel'),
            'firma_id'=>$this->input->post('firma_id'),
        );
        $this->Database_Model->insert_data("yetkili",$data);
        redirect(base_url().'admin/firma_yetkilileri/firma_yetkilileri');
            
    }
    
    
    
        
	}
    
