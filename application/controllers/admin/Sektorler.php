<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sektorler extends CI_Controller {

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
    public function sektorler()
	{
		
        $sorgu=$this->db->query("SELECT * FROM sektorler");//üyeleri veri tabanından çek
        $data["veri"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/sektorler');
        $this->load->view('admin/_footer');
            
    }
    
    public function sektorler_guncelle($id)
	{
		
        $sektor_adi=$this->input->post('sektor_adi');		
        $data=array(
            'sektor_adi'=>$sektor_adi,
        );
            $this->Database_Model->update_data("sektorler",$data,$id);
             redirect(base_url()."admin/sektorler/sektorler");
            
    }
    
    public function sektorler_sil($id)
	{
		
        $this->db->query("DELETE FROM sektorler WHERE Id=$id");
        redirect(base_url().'admin/sektorler/sektorler');
            
    }
    public function sektorler_ekle()
	{
		
        $sektor_adi =$this->input->post('sektor_adi');
        $data=array(
            "sektor_adi"=>$sektor_adi,
        );
        $this->Database_Model->insert_data("sektorler",$data);
        redirect(base_url().'admin/sektorler/sektorler');
            
    }
    
    
    
        
	}
    
