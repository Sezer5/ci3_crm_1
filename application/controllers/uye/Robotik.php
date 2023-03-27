<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Robotik extends CI_Controller {

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
   
    public function Robotik()
	{   
        $sql = "CALL robotikforkliftvardiya1hesaplaması()";
        $this->db->query($sql);
        
        $sql = "CALL robotikforklifttoplamhesaplaması()";
        $this->db->query($sql);
        
        $sql = "CALL robotikforklifttoplamyokicin()";
        $this->db->query($sql);
        
        $sql = "CALL robotikforkliftisimsiz1incikayithesap()";
        $this->db->query($sql);
        
        $sql = "CALL robotikforkliftisimsiz2ncikayithesap()";
        $this->db->query($sql);
        
        $sql = "CALL bigbagvetorbasaatlikkopyalama()";
        $this->db->query($sql);
        
        $sql = "CALL tltonhesaplama()";
        $this->db->query($sql);
        
        $sql = "CALL robotikgunlukuretimhesabı()";
        $this->db->query($sql);
        
        $sql = "CALL robotikaylikuretimhesabı()";
        $this->db->query($sql);
        
        $sql = "CALL robotikpaketlemekopyalama()";
        $this->db->query($sql);
        
        $sql = "CALL robotikpaketlemeayliktoplamhesabı()";
        $this->db->query($sql);
        
        $sql = "CALL robotikpaketlemedeger2hesabı()";
        $this->db->query($sql);
        
        $sql = "CALL robotikpaketlemedegertoplamhesabı()";
        $this->db->query($sql);
        
        $sql = "CALL robotikpaketlemedeger3hesabı()";
        $this->db->query($sql);

        $sorgu=$this->db->query("SELECT * FROM robotikforklift");
        $data["robotikforklift"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM robotikpaketleme");
        $data["robotikpaketleme"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM robotiktablo2");
        $data["robotiktablo2"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/robotik');
        $this->load->view('uye/_footer');
        
	}
    
    public function robotikpaketleme_guncelle($id)
	{
		
	$data=array(
        'deger1'=>$this->input->post('deger1'),
    );
        $this->Database_Model->update_data("robotikpaketleme",$data,$id);
         redirect(base_url()."uye/robotik/robotik");
    }
    public function tablo2_guncelle($id)
	{
		
	$data=array(
        'tonsaat'=>$this->input->post('tonsaat'),
    );
        $this->Database_Model->update_data("robotiktablo2",$data,$id);
         redirect(base_url()."uye/robotik/robotik");
    }
    public function forklift_guncelle($id)
	{
		
	$data=array(
        'litre'=>$this->input->post('litre'),
    );
        $this->Database_Model->update_data("robotikforklift",$data,$id);
         redirect(base_url()."uye/robotik/robotik");
    }
    
    
    
}
