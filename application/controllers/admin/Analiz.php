<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analiz extends CI_Controller {

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
    public function Analiz()
	{
		
        $sorgu=$this->db->query("SELECT * FROM firmalar");
        $data["veri"]=$sorgu->result();
                        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/analiz');
        $this->load->view('admin/_footer');
            
    }
    public function analiz_baslat()
	{
        $data=array(
		    'firma_id'=>$this->input->post('firma_id'),
		);
        $this->Database_Model->insert_data("analiz_ust",$data);
        $analiz_id = $this->db->insert_id();
        redirect(base_url()."admin/analiz/analiz_detaylandirma/$analiz_id");
        
        
	}
    
    public function analiz_detaylandirma($id)
	{
		$a=0;
        $sorgu=$this->db->query("SELECT * FROM analiz_ust WHERE Id=$id");
        $data["veri"]=$sorgu->result();
        
        foreach($data['veri'] as $rs){
           
            
                $a=$rs->firma_id;
            };
            
		$data["firma_no"]=$a;
		$data["analiz_no"]=$id;
        
        $sorgu=$this->db->query("SELECT firmalar.*, firma_turleri.tur_adi as firma_tur_adi, sehir.adi as firma_sehir_adi, ilce.adi as firma_ilce_adi, sektorler.sektor_adi as firma_sektorler_adi
    		FROM firmalar
    		LEFT JOIN firma_turleri ON firmalar.firma_turu_id=firma_turleri.Id
    		LEFT JOIN sehir ON sehir.Id=firmalar.il_id
    		LEFT JOIN ilce ON ilce.Id=firmalar.ilce_id
    		LEFT JOIN sektorler ON sektorler.Id=firmalar.sektor_id
    		WHERE  firmalar.Id = '$a'");
        $data["firma_bilgileri"]=$sorgu->result();
        
        $this->load->model('Main_model');
        $data['rakip_firma'] = $this->Main_model->getrakipFirma();
        
        $sorgu=$this->db->query("SELECT * FROM paketlemeler");
        $data["paketlemeler"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT analiz_alt_rakip.*, firmalar.firma_adi as musteri_adi, rakip_firmalar.firma_adi as rakip_firma_adi, rakip_firma_urunler.urun_adi as rakip_urun_adi, paketlemeler.paket_adi as rakip_paketleme_adi
    		FROM analiz_alt_rakip
    		LEFT JOIN firmalar ON firmalar.Id=analiz_alt_rakip.musteri_id
    		LEFT JOIN rakip_firmalar ON rakip_firmalar.Id=analiz_alt_rakip.tedarikci_id
    		LEFT JOIN rakip_firma_urunler ON rakip_firma_urunler.Id=analiz_alt_rakip.tedarikci_urun_id
    		LEFT JOIN paketlemeler ON paketlemeler.Id=analiz_alt_rakip.paketleme_id
    		WHERE  analiz_alt_rakip.analiz_id = '$id'");
        $data["rakip_urunler"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT analiz_alt_sirket.*, firmalar.firma_adi as musteri_adi, urunler.urun_adi as urun_adi, paketlemeler.paket_adi as paketleme_adi
    		FROM analiz_alt_sirket
    		LEFT JOIN firmalar ON firmalar.Id=analiz_alt_sirket.musteri_id
    		LEFT JOIN urunler ON urunler.Id=analiz_alt_sirket.tedarikci_urun_id
    		LEFT JOIN paketlemeler ON paketlemeler.Id=analiz_alt_sirket.paketleme_id
    		WHERE  analiz_alt_sirket.analiz_id = '$id'");
        $data["sirket"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM urunler");
        $data["urunler"]=$sorgu->result();
                        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/analiz_detaylandirma');
        $this->load->view('admin/_footer');
            
    }
    public function getUrun(){ 
    $postData = $this->input->post();
    
    // load model 
    $this->load->model('Main_model');
    
    // get data 
    $data['rakipurun'] = $this->Main_model->getUrun($postData);
    echo json_encode($data['rakipurun']);
    }
    public function firma_rakip_urun_ekle()
	{
		
        $analiz_no =$this->input->post('analiz_no');
        $data=array(
            "analiz_id"=>$this->input->post('analiz_no'),
            "musteri_id"=>$this->input->post('firma_no'),
            "tedarikci_sirasi"=>$this->input->post('tedarikci_sirasi'),
            "tedarikci_id"=>$this->input->post('rakip_firma'),
            "tedarikci_urun_id"=>$this->input->post('town'),
            "paketleme_id"=>$this->input->post('paketleme_id'),
            "kapasite"=>$this->input->post('kapasite'),
            "kapasite_birim"=>$this->input->post('kapasite_birim'),
            "fiyat"=>$this->input->post('fiyat'),
            "periyot"=>$this->input->post('periyot'),
            "beyazlik_onemi"=>$this->input->post('beyazlik_onemi'),
            "beyazlik_derecesi"=>$this->input->post('beyazlik_derecesi'),
        );
        $this->Database_Model->insert_data("analiz_alt_rakip",$data);
        redirect(base_url()."admin/analiz/analiz_detaylandirma/$analiz_no");
            
    }
    
    public function firma_rakip_urun_sil($id,$analiz_no)
	{
		
        $this->db->query("DELETE FROM analiz_alt_rakip WHERE Id=$id");
        redirect(base_url()."admin/analiz/analiz_detaylandirma/$analiz_no");
            
    }
    
    public function sirket_urun_ekle()
	{
		
        $analiz_no =$this->input->post('analiz_no');
        $data=array(
            "analiz_id"=>$this->input->post('analiz_no'),
            "musteri_id"=>$this->input->post('firma_no'),
            "tedarikci_sirasi"=>$this->input->post('tedarikci_sirasi'),
            "tedarikci_id"=>0,
            "tedarikci_urun_id"=>$this->input->post('firma_urun'),
            "paketleme_id"=>$this->input->post('paketleme_id'),
            "kapasite"=>$this->input->post('kapasite'),
            "kapasite_birim"=>$this->input->post('kapasite_birim'),
            "fiyat"=>$this->input->post('fiyat'),
            "periyot"=>$this->input->post('periyot'),
            "beyazlik_onemi"=>$this->input->post('beyazlik_onemi'),
            "beyazlik_derecesi"=>$this->input->post('beyazlik_derecesi'),
        );
        $this->Database_Model->insert_data("analiz_alt_sirket",$data);
        redirect(base_url()."admin/analiz/analiz_detaylandirma/$analiz_no");
            
    }
    public function sirket_urun_sil($id,$analiz_no)
	{
		
        $this->db->query("DELETE FROM analiz_alt_sirket WHERE Id=$id");
        redirect(base_url()."admin/analiz/analiz_detaylandirma/$analiz_no");
            
    }
                
	}
    
