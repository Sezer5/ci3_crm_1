<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masrafmerkezikaydi extends CI_Controller {

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
    
    public function Masrafmerkezikaydi1()
	{   
        $this->load->view('uye/_header');
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/masrafmerkezi1');
        $this->load->view('uye/_footer');
        
	}
    public function masrafmerkezikaydi_ekle()
	{
        $mmkodu=$this->input->post('mmkodu');
        $mmadi=$this->input->post('mmadi');
        $borc=$this->input->post('borc');
        $data=array(
		    'kayitolusturanadsoy'=>$this->session->oturum_uye['adsoy'],
            'kayitolusturanid'=>$this->session->oturum_uye['id'],
		);
        $this->Database_Model->insert_data("maliyet_muhasebe",$data);
        $maliyet_muhasebe = $this->db->insert_id();
        $data=array(
		    'kayitolusturanadsoy'=>$this->session->oturum_uye['adsoy'],
            'kayitolusturanid'=>$this->session->oturum_uye['id'],
            'maliyet_muhasebe_id'=>$maliyet_muhasebe,
		);
        $this->Database_Model->insert_data("masraf_merkezi",$data);
        $masraf_merkezi = $this->db->insert_id();
        $data=array(
		    'kayitolusturanadsoy'=>$this->session->oturum_uye['adsoy'],
            'kayitolusturanid'=>$this->session->oturum_uye['id'],
            'maliyet_muhasebe_id'=>$maliyet_muhasebe,
            'masraf_merkezi_id'=>$masraf_merkezi,
            'mmkodu'=>$mmkodu,
            'mmadi'=>$mmadi,
            'borc'=>$borc,
		);
        $this->Database_Model->insert_data("masraf_merkezi_kalemleri",$data);
        
        $sorgu=$this->db->query("SELECT * FROM masraf_merkezi_kalemleri WHERE maliyet_muhasebe_id=$maliyet_muhasebe AND masraf_merkezi_id=$masraf_merkezi");
        $data["veriler"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/masrafmerkezi2');
        $this->load->view('uye/_footer');
        
	}
    
    public function Masrafmerkezikaydiekle2($masraf,$muhasebe)
	{   
        $mmkodu=$this->input->post('mmkodu');
        $mmadi=$this->input->post('mmadi');
        $borc=$this->input->post('borc');
        $masraf_merkezi=$masraf;
        $maliyet_muhasebe=$muhasebe;
        $data=array(
		    'kayitolusturanadsoy'=>$this->session->oturum_uye['adsoy'],
            'kayitolusturanid'=>$this->session->oturum_uye['id'],
            'maliyet_muhasebe_id'=>$maliyet_muhasebe,
            'masraf_merkezi_id'=>$masraf_merkezi,
            'mmkodu'=>$mmkodu,
            'mmadi'=>$mmadi,
            'borc'=>$borc,
		);
        $this->Database_Model->insert_data("masraf_merkezi_kalemleri",$data);
        redirect(base_url()."uye/masrafmerkezikaydi/masrafmerkezikaydi2/$maliyet_muhasebe");
        
	}
    public function Masrafmerkezikaydi2($deger)
	{   
        
        $sorgu=$this->db->query("SELECT * FROM masraf_merkezi_kalemleri WHERE maliyet_muhasebe_id='$deger'");
        $data["veriler"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/masrafmerkezi2');
        $this->load->view('uye/_footer');
        
	}
    function masrafmerkezikaydisil($id,$masraf,$muhasebe)
	{
        $maliyet_muhasebe=$muhasebe;
        $masraf_merkezi=$masraf;
        $this->db->query("DELETE FROM masraf_merkezi_kalemleri WHERE Id=$id");
        redirect(base_url()."uye/masrafmerkezikaydi/masrafmerkezikaydi2/$maliyet_muhasebe");
        
	}
    public function masrafmerkezikayitlari()
	{   
        $sorgu=$this->db->query("SELECT * FROM masraf_merkezi");
        $data["veriler"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/masrafmerkezikayitlari');
        $this->load->view('uye/_footer');
        
	}
    public function masrafmerkezikayitlari_detay($id)
	{   
        $sorgu=$this->db->query("SELECT * FROM masraf_merkezi_kalemleri WHERE masraf_merkezi_id=$id");
        $data["veriler"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/masrafmerkezikayitlari_detay');
        $this->load->view('uye/_footer');
        
	}
    public function masrafmerkezikayditamamla($muhasebe)
	{   
        $borc=0;
        $maliyet_muhasebe=$muhasebe;
        $data=array(
		    'muhasebe_durum'=>"1",
		);
        $this->Database_Model->update_data("maliyet_muhasebe",$data,$maliyet_muhasebe);
        $sorgu=$this->db->query("SELECT SUM(borc) as toplamborc FROM masraf_merkezi_kalemleri WHERE maliyet_muhasebe_id=$maliyet_muhasebe");
        $data["borc"]=$sorgu->result();
        foreach($data['borc'] as $bs){
            $borc=$bs->toplamborc;
        };
        $data=array(
		    'muhasebe_toplam'=>$borc,
		);
        $this->Database_Model->update_data("maliyet_muhasebe",$data,$maliyet_muhasebe);
        redirect(base_url()."uye/home");
        
	}
    
    
}
