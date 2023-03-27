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
                $this->load->library('Http');
                if (!$this->session->userdata("oturum_data")){
				redirect(base_url().'admin/Login');}
				
        }
	public function index()
	{
        $sorgu =$this->load->database('db2',TRUE)->query("SELECT * FROM Users");
        $data["masraf"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/_main_content');
        $this->load->view('admin/_footer');
        
	}
    public function login()
	{
        $this->load->view('admin/login_formu');
        
	}
    
     public function profilim()
	{
        $sorgu=$this->db->query("SELECT * FROM admin WHERE Id=".$this->session->oturum_data["id"]);//üyeleri veri tabanından çek
        $data["veri"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/profilim');
        $this->load->view('admin/_footer');
        
	}
    
    function profil_guncelle_admin($Id){
        
        $data=array(
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password'),
		);
        $this->session->set_flashdata("sonuc","Güncelleme Başarılı Olmuştur.");
        $this->Database_Model->update_data("admin",$data,$Id);
        redirect(base_url()."admin/home/profilim");
    }
    


}
