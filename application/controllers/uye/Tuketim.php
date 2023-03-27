<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuketim extends CI_Controller {

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
   
    public function Tuketim()
	{
       
        
        $sql = "CALL iscilik1iscidonatisi1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1sgkprimleri()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1servisaylik()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1yemekaylik()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1iscidonatisiaylik()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kidemtazminatikarsiligi1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1ihbartazminatikarsiligi1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1ayliktoplam1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1calisilmayanguntoplami1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1netcalisilangun1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1aylikortalamacalisilangun1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1ayliknet1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1birsaat1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1sondeger1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1sondeger2()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1sondeger3()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1ortalama1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1netucret1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1brutucret1()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1brutucret2()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1brutucret3()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1brutucret4()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1brutucretort()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kisilerd01()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kisilerd02()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kisilerd03()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kisilerd05()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kisilerdik()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kisilerdegirmentoplam()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kisilerk03k04()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kisilerk06()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kisilerkaplamatoplam()";
        $this->db->query($sql);
        
        //SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER 
        //SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER 
        //SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER 
        //SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER 
        $sql = "CALL carpimdegerler()";
        $this->db->query($sql);
        
        
        $sql = "CALL iscilik1kisilergeneltoplam()";
        $this->db->query($sql);
        
        $sql = "CALL iscilik1kisilergeneltoplamdeger()";
        $this->db->query($sql);
        
        //SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER 
        //SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER 
        //SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER 
        //SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER SORUNLU OLAN PROSEDÜRLER 
        
        $sorgu=$this->db->query("SELECT * FROM degirmenler WHERE Id=1");
        $data["gundegiskeni"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM degirmenler WHERE Id!=1");
        $data["veri"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM kpl_alt WHERE Id!=1");
        $data["kpl"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM dikdegirmenler WHERE Id!=1");
        $data["dikdegirmen"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM srk_alt WHERE Id!=1");
        $data["sarkac"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM stearikasit");
        $data["stasit"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM iscilik1");
        $data["iscilik1"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM iscilik1kisiler");
        $data["iscilik1kisiler"]=$sorgu->result();
        
        
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/tuketim');
        $this->load->view('uye/_footer');
        
	}
    
    public function gun_guncelle()
	{
        $id=$this->input->post('gun');
		
	$data=array(
		'gunluk'=>$this->input->post('deger'),
        
    );
        $this->Database_Model->update_data("degirmenler",$data,$id);
        $this->Database_Model->update_data("srk_alt",$data,$id);
        $this->Database_Model->update_data("kpl_alt",$data,$id);
        $this->Database_Model->update_data("dikdegirmenler",$data,$id);
    $data=array(
		'gundeger'=>$this->input->post('deger'),
        
    );
        $this->Database_Model->update_data_all("degirmenler",$data);
        $this->Database_Model->update_data_all("kpl_alt",$data);
        $this->Database_Model->update_data_all("srk_alt",$data);
        $this->Database_Model->update_data_all("dikdegirmenler",$data);
        redirect(base_url()."uye/tuketim/tuketim");
    }
    
    public function degirmen_guncelle($id)
	{
        $data=array(
		'adi'=>$this->input->post('adi'),
        'gunluk'=>$this->input->post('gun'),
        'ok'=>$this->input->post('ok'),
       );
        $this->Database_Model->update_data("degirmenler",$data,$id);
        redirect(base_url()."uye/tuketim/tuketim");
        
	}
    
    public function kpl_guncelle($id)
	{
        $data=array(
		'ist'=>$this->input->post('ist'),
        'gunluk'=>$this->input->post('gun'),
        'ok'=>$this->input->post('ok'),
       );
        $this->Database_Model->update_data("kpl_alt",$data,$id);
        redirect(base_url()."uye/tuketim/tuketim");
        
	}
    
    public function dikdegirmen_guncelle($id)
	{
        $data=array(
		'adi'=>$this->input->post('adi'),
        'gunluk'=>$this->input->post('gun'),
        'ok'=>$this->input->post('ok'),
       );
        $this->Database_Model->update_data("dikdegirmenler",$data,$id);
        redirect(base_url()."uye/tuketim/tuketim");
        
	}
    
     public function sarkac_guncelle($id)
	{
        $data=array(
		'adi'=>$this->input->post('adi'),
        'gunluk'=>$this->input->post('gun'),
        'ok'=>$this->input->post('ok'),
       );
        $this->Database_Model->update_data("srk_alt",$data,$id);
        redirect(base_url()."uye/tuketim/tuketim");
        
	}
    
    public function stasit_guncelle($id)
	{
        $data=array(
		'adi'=>$this->input->post('adi'),
        'ton'=>$this->input->post('ton'),
       );
        $this->Database_Model->update_data("stearikasit",$data,$id);
        redirect(base_url()."uye/tuketim/tuketim");
        
	}
    
    public function iscilik1_guncelle($id)
	{
        $data=array(
		'deger1'=>$this->input->post('deger1'),
       );
        $this->Database_Model->update_data("iscilik1",$data,$id);
        redirect(base_url()."uye/tuketim/tuketim");
        
	}
    public function iscilik1kisilerdeger12_guncelle($id)
	{
        $data=array(
		'deger1'=>$this->input->post('deger1'),
        'deger2'=>$this->input->post('deger2'),
       );
        $this->Database_Model->update_data("iscilik1kisiler",$data,$id);
        redirect(base_url()."uye/tuketim/tuketim");
        
	}
    public function iscilik1kisilerdeger3_guncelle($id)
	{
        $data=array(
		'deger3'=>$this->input->post('deger3'),
       );
        $this->Database_Model->update_data("iscilik1kisiler",$data,$id);
        redirect(base_url()."uye/tuketim/tuketim");
        
	}
    
    
}
