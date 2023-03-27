<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satinalma extends CI_Controller {

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
    
    public function satinalma()
	{
        $sorgu=$this->db->query("SELECT * FROM satinalma_palet");//üyeleri veri tabanından çek
        $data["paletler"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyat WHERE Id=21");//üyeleri veri tabanından çek
        $data["sa"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyat WHERE Id=16 OR Id=17 OR Id=18 OR Id=19 OR Id=20");//üyeleri veri tabanından çek
        $data["ok"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM torba_maliyetleri");//üyeleri veri tabanından çek
        $data["torbamaliyetleri"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/satinalma');
        $this->load->view('uye/_footer');
        
	}
    
    function paletguncelle($Id){
        
        $data=array(
        'yurtici'=>$this->input->post('yurtici'),
        'yurtdisi'=>$this->input->post('yurtdisi'),
		);
        $this->Database_Model->update_data("satinalma_palet",$data,$Id);
        redirect(base_url()."uye/satinalma/satinalma");
    }
    function saguncelle($Id){
        
        $data=array(
        'deger1'=>$this->input->post('deger1'),
        
		);
        $this->Database_Model->update_data("birimfiyat",$data,$Id);
        redirect(base_url()."uye/satinalma/satinalma");
    }
    function okguncelle($Id){
        
        $data=array(
        'yuzde'=>$this->input->post('yuzde'),
        'deger1'=>$this->input->post('deger1'),
        
		);
        $this->Database_Model->update_data("birimfiyat",$data,$Id);
        
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
        
        redirect(base_url()."uye/satinalma/satinalma");
    }
    function torbaguncelle($Id){
        
        $data=array(
        'pp_torba'=>$this->input->post('pp_torba'),
        'kraft'=>$this->input->post('kraft'),
        'bigbag'=>$this->input->post('bigbag'),
        'qbag'=>$this->input->post('qbag'),
        'slingbag'=>$this->input->post('slingbag'),
        'strecth'=>$this->input->post('strecth'),
        
		);
        $this->Database_Model->update_data("torba_maliyetleri",$data,$Id);
        redirect(base_url()."uye/satinalma/satinalma");
    }
    
    
}
