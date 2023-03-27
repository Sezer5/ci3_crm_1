<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analiz_incele extends CI_Controller {

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
    public function Analiz_incele()
	{
		
        $sorgu=$this->db->query("SELECT analiz_ust.*,firmalar.firma_adi as firma_adi,firmalar.cari_kodu as cari_kodu,firmalar.tel as tel,firmalar.email as email, firma_turleri.tur_adi as firma_tur_adi, sehir.adi as firma_sehir_adi, ilce.adi as firma_ilce_adi, sektorler.sektor_adi as firma_sektorler_adi
    		FROM analiz_ust
    		LEFT JOIN firmalar ON firmalar.Id=analiz_ust.firma_id
    		LEFT JOIN sehir ON sehir.Id=firmalar.il_id
    		LEFT JOIN ilce ON ilce.Id=firmalar.ilce_id
    		LEFT JOIN sektorler ON sektorler.Id=firmalar.sektor_id
    		LEFT JOIN firma_turleri ON firma_turleri.Id=firmalar.firma_turu_id
    		");
        $data["veri"]=$sorgu->result();
                        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/analiz_incele');
        $this->load->view('admin/_footer');
            
    }
    public function Analiz_incele_detay($id)
	{
		
        $sorgu=$this->db->query("SELECT analiz_ust.*,firmalar.firma_adi as firma_adi,firmalar.cari_kodu as cari_kodu,firmalar.tel as tel,firmalar.email as email, firma_turleri.tur_adi as firma_tur_adi, sehir.adi as firma_sehir_adi, ilce.adi as firma_ilce_adi, sektorler.sektor_adi as firma_sektorler_adi
    		FROM analiz_ust
    		LEFT JOIN firmalar ON firmalar.Id=analiz_ust.firma_id
    		LEFT JOIN sehir ON sehir.Id=firmalar.il_id
    		LEFT JOIN ilce ON ilce.Id=firmalar.ilce_id
    		LEFT JOIN sektorler ON sektorler.Id=firmalar.sektor_id
    		LEFT JOIN firma_turleri ON firma_turleri.Id=firmalar.firma_turu_id
    		");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM analiz_ust WHERE Id=$id");
        $data["firma_id"]=$sorgu->result();
        $firma=0;
        foreach($data['firma_id'] as $rs){
            $firma=$rs->firma_id;
        };
        
        
        $sorgu=$this->db->query("SELECT temsilciler.*, admin.ad as temsilci_adi, admin.soyad as temsilci_soyadi, firmalar.firma_adi as temsilci_firma_adi, admin.unvan as unvan, admin.email as email,admin.tel as tel,admin.kisakod as kisakod
    		FROM temsilciler
    		LEFT JOIN firmalar ON temsilciler.firma_id=firmalar.Id
    		LEFT JOIN admin ON temsilciler.temsilci_id=admin.Id WHERE temsilciler.firma_id=$firma
    		");
        $data["temsilci"]=$sorgu->result();
        
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
                        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/analiz_incele_detay');
        $this->load->view('admin/_footer');
            
    }
    
                
	}
    
