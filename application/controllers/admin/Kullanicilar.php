<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {

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
    public function Kullanicilar()
	{
		
        $sorgu=$this->db->query("SELECT * FROM admin");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM departmanlar");
        $data["departmanlar"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kullanicilar');
        $this->load->view('admin/_footer');
            
    }
    public function kullanicilar_duzenle($id)
	{
		
        $sorgu=$this->db->query("SELECT admin.*, departmanlar.dep_adi as dep_adi FROM admin
		INNER JOIN departmanlar ON admin.dep_id=departmanlar.Id WHERE admin.Id=$id");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM departmanlar");//üyeleri veri tabanından çek
        $data["departmanlar"]=$sorgu->result();
        
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kullanici_duzenle');
        $this->load->view('admin/_footer');
            
    }
    
    public function kullanici_guncelle($id)
	{
		
        $data=array(
            'user_id'=>$this->input->post('user_id'),
            'ad'=>$this->input->post('ad'),
            'soyad'=>$this->input->post('soyad'),
            'unvan'=>$this->input->post('unvan'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'yetki'=>$this->input->post('yetki'),
            'tel'=>$this->input->post('tel'),
            'kisakod'=>$this->input->post('kisakod'),
            'dep_id'=>$this->input->post('dep_id'),
            
        );
            $this->Database_Model->update_data("admin",$data,$id);
             redirect(base_url()."admin/kullanicilar/kullanicilar_duzenle/$id");
            
    }
    
    public function kullanici_sil($id)
	{
		
        $this->db->query("DELETE FROM admin WHERE Id=$id");
        redirect(base_url().'admin/kullanicilar/kullanicilar');
            
    }
    public function kullanici_ekle()
	{
		
        $data=array(
            'user_id'=>$this->input->post('user_id'),
            'ad'=>$this->input->post('ad'),
            'soyad'=>$this->input->post('soyad'),
            'unvan'=>$this->input->post('unvan'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'yetki'=>$this->input->post('yetki'),
            'tel'=>$this->input->post('tel'),
            'kisakod'=>$this->input->post('kisakod'),
            'dep_id'=>$this->input->post('dep_id'),
        );
        $this->Database_Model->insert_data("admin",$data);
        redirect(base_url().'admin/kullanicilar/kullanicilar');
            
    }
    
    
    
        
	}
    
