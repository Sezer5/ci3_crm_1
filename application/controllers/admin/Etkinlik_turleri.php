<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etkinlik_turleri extends CI_Controller {

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
    public function Etkinlik_turleri()
	{
		
        $sorgu=$this->db->query("SELECT * FROM etkinlik_turleri");//üyeleri veri tabanından çek
        $data["veri"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/etkinlik_turleri');
        $this->load->view('admin/_footer');
            
    }
    
    public function etkinlik_turleri_guncelle($id)
	{
		
        $tur_adi=$this->input->post('tur_adi');		
        $birim=$this->input->post('birim');		
        $data=array(
            'tur_adi'=>$tur_adi,
            'birim'=>$birim,
        );
            $this->Database_Model->update_data("etkinlik_turleri",$data,$id);
             redirect(base_url()."admin/etkinlik_turleri/etkinlik_turleri");
            
    }
    
    public function etkinlik_turleri_sil($id)
	{
		
        $this->db->query("DELETE FROM etkinlik_turleri WHERE Id=$id");
        redirect(base_url().'admin/etkinlik_turleri/etkinlik_turleri');
            
    }
    public function etkinlik_turleri_ekle()
	{
		
        $tur_adi=$this->input->post('tur_adi');		
        $birim=$this->input->post('birim');
        $data=array(
            "tur_adi"=>$tur_adi,
            "birim"=>$birim,
        );
        $this->Database_Model->insert_data("etkinlik_turleri",$data);
        redirect(base_url().'admin/etkinlik_turleri/etkinlik_turleri');
            
    }
    
    
    
        
	}
    
