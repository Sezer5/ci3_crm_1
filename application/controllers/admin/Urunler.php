<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {

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
    public function Urunler()
	{
		
        $sorgu=$this->db->query("SELECT * FROM urunler");
        $data["veri"]=$sorgu->result();
                
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/urunler');
        $this->load->view('admin/_footer');
            
    }
    public function Urunler_duzenle($id)
	{
		
        $sorgu=$this->db->query("SELECT * FROM urunler WHERE Id=$id");
        $data["veri"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/urunler_duzenle');
        $this->load->view('admin/_footer');
            
    }
    
    public function urunler_guncelle($id)
	{
		
        $data=array(
            'urun_kodu'=>$this->input->post('urun_kodu'),
            'urun_adi'=>$this->input->post('urun_adi'),
            
        );
            $this->Database_Model->update_data("urunler",$data,$id);
             redirect(base_url()."admin/Urunler/Urunler_duzenle/$id");
            
    }
    
    public function urunler_sil($id)
	{
		
        $this->db->query("DELETE FROM urunler WHERE Id=$id");
        redirect(base_url().'admin/Urunler/Urunler');
            
    }
    public function urunler_ekle()
	{
		
        $data=array(
            'urun_kodu'=>$this->input->post('urun_kodu'),
            'urun_adi'=>$this->input->post('urun_adi'),
            
        );
        $this->Database_Model->insert_data("urunler",$data);
        redirect(base_url().'admin/Urunler/Urunler');
            
    }
    
    
    
        
	}
    
