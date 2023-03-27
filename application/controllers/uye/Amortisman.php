<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amortisman extends CI_Controller {

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
    
    public function amortisman()
	{
        
        $sql = "CALL amortismanfaydaliomurkopyalama()";
        $this->db->query($sql);
        
        $sql = "CALL amortismansaatlikhesaplama()";
        $this->db->query($sql);
        
        $sql = "CALL amortismandikdegirmensarkackaplamarobotiksaatlikhesaplama()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM amortisman WHERE Id !=9");
        $data["amortisman"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM amortisman WHERE Id=9");
        $data["faydaliomur"]=$sorgu->result();
       
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/amortisman');
        $this->load->view('uye/_footer');
        
	}
    public function faydaliomur_guncelle($id)
	{
		
	$data=array(
		'deger1'=>$this->input->post('omur'),
    );
        $this->Database_Model->update_data("amortisman",$data,$id);
         redirect(base_url()."uye/amortisman/amortisman");
    }
    
    public function amortismandeger1_guncelle($id)
	{
		
	$data=array(
		'deger1'=>$this->input->post('deger1'),
    );
        $this->Database_Model->update_data("amortisman",$data,$id);
         redirect(base_url()."uye/amortisman/amortisman");
    }
   
    
    
    
}
