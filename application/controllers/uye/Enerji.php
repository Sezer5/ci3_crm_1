<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enerji extends CI_Controller {

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
                // Your own constructor code
                $this->load->library("session");
				$this->load->helper('url');
                $this->load->helper('text');
                $this->load->helper('number');
                $this->load->database(); //Sayfada database'ye erişimi sağlar
				$this->load->model('Database_Model');
                $this->load->database('db2',TRUE);
                $this->load->library('form_validation');
                if (!$this->session->userdata("oturum_uye")){
				redirect(base_url().'uye/Login');}
				
        }
	public function index()
	{
       
        
        $this->load->view('uye/_header');
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/_main_content');
        $this->load->view('uye/_footer');
        
	}
    
    public function enerji()
	{
        
        $sql = "CALL enerji_t_degerleri_cekme()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM enerji");
        $data["enerji"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyat WHERE Id=27");
        $data["elektrik"]=$sorgu->result();
       
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/enerji');
        $this->load->view('uye/_footer');
        
	}
     public function elektrikbrfiyat_guncelle($id)
	{
		
	$data=array(
		'yuzde'=>$this->input->post('elektrik'),
    );
        $this->Database_Model->update_data("birimfiyat",$data,$id);
         redirect(base_url()."uye/enerji/enerji");
    }
    
    public function tuketim_guncelle($id)
	{
		
	$data=array(
		'tuketim'=>$this->input->post('tuketim'),
    );
        $this->Database_Model->update_data("enerji",$data,$id);
         redirect(base_url()."uye/enerji/enerji");
    }
   
    
    
    
}
