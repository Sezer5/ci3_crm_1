<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Birimfiyat extends CI_Controller {

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
   
    public function birim_fiyat()
	{
        $sql = "CALL asaassadas()";
        $this->db->query($sql);
        
        $sql = "CALL ogutme3()";
        $this->db->query($sql);
       
        $sql = "CALL ogutme2()";
        $this->db->query($sql);
        
        $sql = "CALL ogutme4()";
        $this->db->query($sql);
        
        $sql = "CALL ogutme5()";
        $this->db->query($sql);
        
        $sql = "CALL trietanomalin()";
        $this->db->query($sql);
        
        $sql = "CALL gliserin()";
        $this->db->query($sql);
        
        $sql = "CALL monotelin()";
        $this->db->query($sql);
        
        $sql = "CALL stearikasitbir()";
        $this->db->query($sql);
        
        $sql = "CALL stearikasitbirbir()";
        $this->db->query($sql);
        
        $sql = "CALL stearikasitiki()";
        $this->db->query($sql);
        
        $sql = "CALL ka02()";
        $this->db->query($sql);
        
        $sql = "CALL stearikasituc()";
        $this->db->query($sql);
        
        $sql = "CALL stearikasituc2()";
        $this->db->query($sql);
        
        $sql = "CALL ka02asit()";
        $this->db->query($sql);
        
        $sql = "CALL ka02asitiki()";
        $this->db->query($sql);
        
        $sql = "CALL glsurunlerdegeruc()";
        $this->db->query($sql);
        
        $sql = "CALL bakimgiderleri()";
        $this->db->query($sql);
        
        $sql = "CALL gyg()";
        $this->db->query($sql);
        
        $sql = "CALL digermaliyet()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyat");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyat_tablo2");
        $data["veriler"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/birim_fiyat');
        $this->load->view('uye/_footer');
        
	}
    
    public function tablo1_guncelle($id)
	{
		
	$data=array(
		'adi'=>$this->input->post('adi'),
        'yuzde'=>$this->input->post('yuzde'),
        'deger1'=>$this->input->post('deger1'),
        'deger2'=>$this->input->post('deger2'),
        'deger3'=>$this->input->post('deger3'),
        'bilgi'=>$this->input->post('bilgi'),
        'carpan'=>$this->input->post('carpan'),
    );
        $this->Database_Model->update_data("birimfiyat",$data,$id);
         redirect(base_url()."uye/birimfiyat/birim_fiyat");
    }
    
    public function tablo2_guncelle($id)
	{
		
	$data=array(
		'adi'=>$this->input->post('adi'),
        'adi2'=>$this->input->post('adi2'),
        'gercekoran'=>$this->input->post('gercekoran'),
    );
        $this->Database_Model->update_data("birimfiyat_tablo2",$data,$id);
         redirect(base_url()."uye/birimfiyat/birim_fiyat");
    }
    
    
}
