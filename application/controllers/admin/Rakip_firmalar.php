<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rakip_firmalar extends CI_Controller {

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
    public function Rakip_firmalar()
	{
		
        $sorgu=$this->db->query("SELECT * FROM rakip_firmalar");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT rakip_firma_urunler.*, rakip_firmalar.firma_adi as firma_adi
    		FROM rakip_firma_urunler
    		LEFT JOIN rakip_firmalar ON rakip_firmalar.Id=rakip_firma_urunler.rakip_firma_id");
        $data["urunler"]=$sorgu->result();
                        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/rakip_firmalar');
        $this->load->view('admin/_footer');
            
    }
        
    public function rakip_firmalar_duzenle($id)
	{
		
        $sorgu=$this->db->query("SELECT * FROM rakip_firmalar WHERE Id = '$id'");
        $data["veri"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/rakip_firmalar_duzenle');
        $this->load->view('admin/_footer');
            
    }
    
    public function rakip_firmalar_guncelle()
	{
		$Id=$this->input->post('Id');
        $data=array(
            'firma_adi'=>$this->input->post('firma_adi'),            
        );
            $this->Database_Model->update_data("rakip_firmalar",$data,$Id);
             redirect(base_url()."admin/rakip_firmalar/rakip_firmalar_duzenle/$Id");
            
    }
    
    public function rakip_firmalar_sil($id)
	{
		
        $this->db->query("DELETE FROM rakip_firmalar WHERE Id=$id");
        redirect(base_url().'admin/rakip_firmalar/rakip_firmalar');
            
    }
    public function rakip_firmalar_ekle()
	{
		
        $data=array(
            'firma_adi'=>$this->input->post('firma_adi'),
        );
        $this->Database_Model->insert_data("rakip_firmalar",$data);
        redirect(base_url().'admin/rakip_firmalar/rakip_firmalar');
            
    }
    
    
    // RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ 
    // RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ 
    // RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ 
    // RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ 
    // RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ RAKİP FİRMA ÜRÜN İŞLEMLERİ 
    
    public function rakip_firmalar_urun_ekle()
	{
		
        $data=array(
            'rakip_firma_id'=>$this->input->post('rakip_firma_id'),
            'urun_adi'=>$this->input->post('urun_adi'),
        );
        $this->Database_Model->insert_data("rakip_firma_urunler",$data);
        redirect(base_url().'admin/rakip_firmalar/rakip_firmalar');
            
    }
    
    public function rakip_firmalar_urun_sil($id)
	{
		
        $this->db->query("DELETE FROM rakip_firma_urunler WHERE Id=$id");
        redirect(base_url().'admin/rakip_firmalar/rakip_firmalar');
            
    }
    
    public function rakip_firmalar_urun_duzenle($id)
	{
		
        $sorgu=$this->db->query("SELECT rakip_firma_urunler.*, rakip_firmalar.firma_adi as firma_adi
    		FROM rakip_firma_urunler
    		LEFT JOIN rakip_firmalar ON rakip_firmalar.Id=rakip_firma_urunler.rakip_firma_id WHERE rakip_firma_urunler.Id=$id");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM rakip_firmalar");
        $data["rakip_firmalar"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/rakip_firmalar_urun_duzenle');
        $this->load->view('admin/_footer');
            
    }
    public function rakip_firma_urun_guncelle()
	{
		$Id=$this->input->post('Id');
        $data=array(
            'rakip_firma_id'=>$this->input->post('rakip_firma_id'),            
            'urun_adi'=>$this->input->post('urun_adi'),            
        );
            $this->Database_Model->update_data("rakip_firma_urunler",$data,$Id);
             redirect(base_url()."admin/rakip_firmalar/rakip_firmalar_urun_duzenle/$Id");
            
    }
        
	}
    
