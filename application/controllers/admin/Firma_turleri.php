<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firma_turleri extends CI_Controller {

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
    public function Firma_turleri()
	{
		
        $sorgu=$this->db->query("SELECT * FROM firma_turleri");//üyeleri veri tabanından çek
        $data["veri"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/firma_turleri');
        $this->load->view('admin/_footer');
            
    }
    
    public function firma_turleri_guncelle($id)
	{
		
        $tur_adi=$this->input->post('tur_adi');		
        $data=array(
            'tur_adi'=>$tur_adi,
        );
            $this->Database_Model->update_data("firma_turleri",$data,$id);
             redirect(base_url()."admin/firma_turleri/firma_turleri");
            
    }
    
    public function firma_turleri_sil($id)
	{
		
        $this->db->query("DELETE FROM firma_turleri WHERE Id=$id");
        redirect(base_url().'admin/firma_turleri/firma_turleri');
            
    }
    public function firma_turleri_ekle()
	{
		
        $tur_adi =$this->input->post('tur_adi');
        $data=array(
            "tur_adi"=>$tur_adi,
        );
        $this->Database_Model->insert_data("firma_turleri",$data);
        redirect(base_url().'admin/firma_turleri/firma_turleri');
            
    }
    
    
    
        
	}
    
