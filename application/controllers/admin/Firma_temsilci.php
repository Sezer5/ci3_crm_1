<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firma_temsilci extends CI_Controller {

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
    public function Firma_temsilci()
	{
		
        $sorgu=$this->db->query("SELECT temsilciler.*, admin.ad as temsilci_adi, admin.soyad as temsilci_soyadi, firmalar.firma_adi as temsilci_firma_adi
    		FROM temsilciler
    		LEFT JOIN firmalar ON temsilciler.firma_id=firmalar.Id
    		LEFT JOIN admin ON temsilciler.temsilci_id=admin.Id
    		");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM firmalar");
        $data["firmalar"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM admin");
        $data["temsilciler"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/firma_temsilci');
        $this->load->view('admin/_footer');
            
    }
    public function firma_temsilci_duzenle($id)
	{
		
        $sorgu=$this->db->query("SELECT temsilciler.*, admin.ad as temsilci_adi, admin.soyad as temsilci_soyadi, firmalar.firma_adi as temsilci_firma_adi
    		FROM temsilciler
    		LEFT JOIN firmalar ON temsilciler.firma_id=firmalar.Id
    		LEFT JOIN admin ON temsilciler.temsilci_id=admin.Id WHERE temsilciler.Id=$id");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM firmalar");
        $data["firmalar"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM admin");
        $data["temsilciler"]=$sorgu->result();
        
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/firma_temsilci_duzenle');
        $this->load->view('admin/_footer');
            
    }
    
    public function firma_temsilci_guncelle()
	{
		$Id=$this->input->post('Id');
        $data=array(
            'temsilci_id'=>$this->input->post('temsilci_id'),
            'firma_id'=>$this->input->post('firma_id'),            
        );
            $this->Database_Model->update_data("temsilciler",$data,$Id);
             redirect(base_url()."admin/firma_temsilci/firma_temsilci_duzenle/$Id");
            
    }
    
    public function firma_temsilci_sil($id)
	{
		
        $this->db->query("DELETE FROM temsilciler WHERE Id=$id");
        redirect(base_url().'admin/Firma_temsilci/Firma_temsilci');
            
    }
    public function firma_temsilci_ekle()
	{
		
        $data=array(
            'firma_id'=>$this->input->post('firma_id'),
            'temsilci_id'=>$this->input->post('temsilci_id'),
        );
        $this->Database_Model->insert_data("temsilciler",$data);
        redirect(base_url().'admin/Firma_temsilci/Firma_temsilci');
            
    }
    
    
    
        
	}
    
