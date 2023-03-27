<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
                $this->load->database(); //Sayfada database'ye erişimi sağlar
				$this->load->model('Database_Model');
                $this->load->database('db2',TRUE);
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
    
    
    public function login()
	{
        $this->load->view('uye/login_formu');
	}
    
    public function profilim()
	{
        $sorgu=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->oturum_uye["id"]);//üyeleri veri tabanından çek
        $data["veri"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/profilim');
        $this->load->view('uye/_footer');
        
	}
    
    function profil_guncelle_uye($Id){
        
        $data=array(
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password'),
		);
        $this->session->set_flashdata("sonuc","Güncelleme Başarılı Olmuştur.");
        $this->Database_Model->update_data("uyeler",$data,$Id);
        redirect(base_url()."uye/home/profilim");
    }
    
    
}
