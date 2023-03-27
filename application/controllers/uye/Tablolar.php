<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tablolar extends CI_Controller {

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
    
     public function degirmenler()
	{ 
        $sorgu=$this->db->query("SELECT * FROM degirmenler WHERE Id!=1 AND Id!=18");
        $data["veri"]=$sorgu->result();
         
        $sorgu2=$this->db->query("SELECT * FROM srk");
        $data["veri2"]=$sorgu2->result();
         
        $sorgu3=$this->db->query("SELECT * FROM dikdegirmenler WHERE Id!=1");
        $data["veri3"]=$sorgu3->result();
         
        $sorgu4=$this->db->query("SELECT * FROM kpl");
        $data["veri4"]=$sorgu4->result();
         
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/degirmenler');
        $this->load->view('uye/_footer');
         
	}
    public function degirmen_ekle()
	{ 
        $this->load->view('uye/_header');
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/degirmen_ekle');
        $this->load->view('uye/_footer');
         
	}
    public function dikdegirmen_ekle()
	{ 
        $this->load->view('uye/_header');
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/dikdegirmen_ekle');
        $this->load->view('uye/_footer');
         
	}
    public function kpl_ekle()
	{ 
        $this->load->view('uye/_header');
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/kpl_ekle');
        $this->load->view('uye/_footer');
         
	}
    public function sarkac_ekle()
	{ 
        $this->load->view('uye/_header');
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/sarkac_ekle');
        $this->load->view('uye/_footer');
         
	}
    
    public function degirmen_ekle_kaydet()
	{ 
        
        $seperator=$this->input->post('seperator');
        $degirmenno=$this->input->post('degirmenno');
        
		$data=array(
		            "adi"=>$degirmenno,
                    "m0120"=>'0',
                    "m095"=>'0',
                    "m085"=>'0', 
                    "m75"=>'0',
                    "m65"=>'0',
                    "m650"=>'0',
                    "m1"=>'0',
                    "m2"=>'0',
                    "m3"=>'0',
                    "m5"=>'0',
                    "m10"=>'0',
                    "m20"=>'0',
                    "m40"=>'0',
                    "m60"=>'0',
                    "m80"=>'0',
        
		);
        $this->db->insert("degirmenler",$data);
        $sayac=1;
        for ($x = 1; $x <= $seperator; $x++) {
 
            if($x==$seperator){
                $data=array(
				    "adi"=>$sayac,
                    "degirmen_no"=>$degirmenno,
                    "m0120"=>'0',
                    "m095"=>'0',
                    "m085"=>'0', 
                    "m75"=>'0',
                    "m65"=>'0',
                    "m650"=>'0',
                    "m1"=>'0',
                    "m2"=>'0',
                    "m3"=>'0',
                    "m5"=>'0',
                    "m10"=>'0',
                    "m20"=>'0',
                    "m40"=>'0',
                    "m60"=>'0',
                    "m80"=>'0',
                    "sira"=>'1',
				);
				$this->Database_Model->insert_data("seperatorler",$data);
                $sayac++;
            }else{
			$data=array(
				    "adi"=>$sayac,
                    "degirmen_no"=>$degirmenno,
                    "m0120"=>'0',
                    "m095"=>'0',
                    "m085"=>'0', 
                    "m75"=>'0',
                    "m65"=>'0',
                    "m650"=>'0',
                    "m1"=>'0',
                    "m2"=>'0',
                    "m3"=>'0',
                    "m5"=>'0',
                    "m10"=>'0',
                    "m20"=>'0',
                    "m40"=>'0',
                    "m60"=>'0',
                    "m80"=>'0',
                    "sira"=>'0',
				);
				$this->Database_Model->insert_data("seperatorler",$data);
                $sayac++;};
		};
        
        $this->session->set_flashdata('degirmen', "Değirmen Ekleme Başarılı Olmuştur.");
            redirect(base_url().'uye/tablolar/degirmenler','degirmen');
         
	}
    public function dik_degirmen_ekle_kaydet()
	{ 
        
        
        $degirmenno=$this->input->post('degirmenno');
        
		$data=array(
		            "adi"=>$degirmenno,
                    "m0120"=>'0',
                    "m095"=>'0',
                    "m085"=>'0', 
                    "m075"=>'0',
                    "m065"=>'0',
        
		);
        $this->db->insert("dikdegirmenler",$data);
        $this->session->set_flashdata('degirmen', "Değirmen Ekleme Başarılı Olmuştur.");
            redirect(base_url().'uye/tablolar/degirmenler','degirmen');
         
	}
    
    public function kpl_ekle_kaydet()
	{ 
        
        $seperator=$this->input->post('seperator');
        $degirmenno=$this->input->post('degirmenno');
        
		$data=array(
		            "adi"=>$degirmenno,
                    "k95"=>'0',
                    "k75"=>'0',
                    "gls926"=>'0', 
                    "k65"=>'0',
                    "fk1"=>'0',
                    "k650"=>'0',
                    "1k"=>'0',
                    "gls912"=>'0',
                    "k2"=>'0',
                    "k3"=>'0',
                    "k5"=>'0',
                    "k10"=>'0',
                   
        
		);
        $this->db->insert("kpl",$data);
		
        $sayac=1;
        for ($x = 1; $x <= $seperator; $x++) {
 
            if($x==$seperator){
                $data=array(
				    "ist"=>$sayac,
                    "kpl_ust"=>$degirmenno,
                     "k95"=>'0',
                    "k75"=>'0',
                    "gls926"=>'0', 
                    "k65"=>'0',
                    "fk1"=>'0',
                    "k650"=>'0',
                    "1k"=>'0',
                    "gls912"=>'0',
                    "k2"=>'0',
                    "k3"=>'0',
                    "k5"=>'0',
                    "k10"=>'0',
                    "sira"=>'1',
				);
				$this->Database_Model->insert_data("kpl_alt",$data);
                $sayac++;
            }else{
                    $data=array(
				    "ist"=>$sayac,
                    "kpl_ust"=>$degirmenno,
                     "k95"=>'0',
                    "k75"=>'0',
                    "gls926"=>'0', 
                    "k65"=>'0',
                    "fk1"=>'0',
                    "k650"=>'0',
                    "1k"=>'0',
                    "gls912"=>'0',
                    "k2"=>'0',
                    "k3"=>'0',
                    "k5"=>'0',
                    "k10"=>'0',
                    "sira"=>'0',
				);
				$this->Database_Model->insert_data("kpl_alt",$data);
                $sayac++;
            };
			
		};
        
        $this->session->set_flashdata('degirmen', "Değirmen Ekleme Başarılı Olmuştur.");
            redirect(base_url().'uye/tablolar/degirmenler','degirmen');
         
	}
    
    public function sarkac_ekle_kaydet()
	{ 
        
        $seperator=$this->input->post('seperator');
        $degirmenno=$this->input->post('degirmenno');
        
		$data=array(
		            "adi"=>$degirmenno,
                    "i100"=>'0',
                    "a100"=>'0',
                    "ka100"=>'0', 
                   
		);
        $this->db->insert("srk",$data);
		
        $sayac=1;
        for ($x = 1; $x <= $seperator; $x++) {
 
            if($x==$seperator){
                $data=array(
				    "adi"=>$sayac,
                    "srk_ust"=>$degirmenno,
                    "i100"=>'0',
                    "a100"=>'0',
                    "ka100"=>'0', 
                    "sira"=>'1',
				);
				$this->Database_Model->insert_data("srk_alt",$data);
                $sayac++;
            }else{
                $data=array(
				    "adi"=>$sayac,
                    "srk_ust"=>$degirmenno,
                    "i100"=>'0',
                    "a100"=>'0',
                    "ka100"=>'0', 
                    "sira"=>'0',
				);
				$this->Database_Model->insert_data("srk_alt",$data);
                $sayac++;
            }
			
		};
        
        $this->session->set_flashdata('degirmen', "Değirmen Ekleme Başarılı Olmuştur.");
            redirect(base_url().'uye/tablolar/degirmenler','degirmen');
         
	}
    
    function degirmen_sil($id)
	{
        $this->db->query("DELETE FROM degirmenler WHERE Id=$id");
        $this->db->query("DELETE FROM seperatorler WHERE degirmen_no=$id");
        $this->session->set_flashdata("silme","Silme İşlemi Başarılı Olmuştur.");
        redirect(base_url().'uye/tablolar/degirmenler');
        
	}
    
    function dik_degirmen_sil($id)
	{
         $this->db->query("DELETE FROM dikdegirmenler WHERE Id=$id");
        $this->session->set_flashdata("silme","Silme İşlemi Başarılı Olmuştur.");
        redirect(base_url().'uye/tablolar/degirmenler');
        
	}
    
    function kpl_sil($id)
	{
        $this->db->query("DELETE FROM kpl WHERE Id=$id");
        $this->db->query("DELETE FROM kpl_alt WHERE kpl_ust=$id");
        $this->session->set_flashdata("silme","Silme İşlemi Başarılı Olmuştur.");
        redirect(base_url().'uye/tablolar/degirmenler');
        
	}
    
    function sarkac_sil($id)
	{
         $this->db->query("DELETE FROM srk WHERE Id=$id");
        $this->db->query("DELETE FROM srk_alt WHERE srk_ust=$id");
        $this->session->set_flashdata("silme","Silme İşlemi Başarılı Olmuştur.");
        redirect(base_url().'uye/tablolar/degirmenler');
        
	}
    
    function profil_guncelle_uye($Id){
        
        $data=array(
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password'),
		);
        $this->session->set_flashdata("sonuc","Güncelleme Başarılı Olmuştur.");
        $this->Database_Model->update_data("uye",$data,$Id);
        redirect(base_url()."uye/home/profilim");
    }
    public function seperator_kapasite()
	{ 
       $sorgu1=$this->db->query("SELECT * FROM degirmenler WHERE Id !=1 AND Id !=18");
       $data["veri1"]=$sorgu1->result();
       
        
        foreach($data['veri1'] as $rs){
            
                    $m0120=0;
                    $m095=0;
                    $m085=0;
                    $m75=0;
                    $m65=0;
                    $m650=0;
                    $m1=0;
                    $m2=0;
                    $m3=0;
                    $m5=0;
                    $m10=0;
                    $m20=0;
                    $m40=0;
                    $m60=0;
                    $m80=0;
                    $ustid=$rs->adi;
                    $altsorgu1=$this->db->query("SELECT * FROM seperatorler WHERE degirmen_no=$ustid");
                    $data["toplam1"]=$altsorgu1->result();
                    foreach($data['toplam1'] as $t1){
                        $durum=$t1->durum;
                        if($durum=="1"){
                            $m0120=$t1->m0120+$m0120;
                            $m095=$t1->m095+$m095;
                            $m085=$t1->m085+$m085;
                            $m75=$t1->m75+$m75;
                            $m65=$t1->m65+$m65;
                            $m650=$t1->m650+$m650;
                            $m1=$t1->m1+$m1;
                            $m2=$t1->m2+$m2;
                            $m3=$t1->m3+$m3;
                            $m5=$t1->m5+$m5;
                            $m10=$t1->m10+$m10;
                            $m20=$t1->m20+$m20;
                            $m40=$t1->m40+$m40;
                            $m60=$t1->m60+$m60;
                            $m80=$t1->m80+$m80;
                        };
                    };
    $data=array(
		"m0120"=>$m0120,
        "m095"=>$m095,
        "m085"=>$m085,
        "m75"=>$m75,
        "m65"=>$m65,
        "m650"=>$m650,
        "m1"=>$m1,
        "m2"=>$m2,
        "m3"=>$m3,
        "m5"=>$m5,
        "m10"=>$m10,
        "m20"=>$m20,
        "m40"=>$m40,
        "m60"=>$m60,
        "m80"=>$m80,
		);
        $this->Database_Model->update_data_degirmen("degirmenler",$data,$ustid);
            
            
        };
        
        //SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI  
        //SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI  
        //SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI  
         
        $sorgu2=$this->db->query("SELECT * FROM srk");
       $data["veri2"]=$sorgu2->result();
        
        foreach($data['veri2'] as $ss){
            
                    $i100=0;
                    $a100=0;
                    $ka100=0;
                    $ustid=$ss->adi;
                    $altsorgu2=$this->db->query("SELECT * FROM srk_alt WHERE srk_ust=$ustid");
                    $data["toplam2"]=$altsorgu2->result();
                    foreach($data['toplam2'] as $t2){
                        $durum=$t2->durum;
                        if($durum=="1"){
                            $i100=$t2->i100+$i100;
                            $a100=$t2->a100+$a100;
                            $ka100=$t2->ka100+$ka100;
                        };
                    };
    $data=array(
		"i100"=>$i100,
        "a100"=>$a100,
        "ka100"=>$ka100,
		);
        $this->Database_Model->update_data_degirmen("srk",$data,$ustid);
            
            
        };
        
        //DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI 
        //DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI 
        //DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI DİK DEĞİRMEN BAŞLANGICI 
        
        $sorgu3=$this->db->query("SELECT * FROM dikdegirmenler");
        $data["veri3"]=$sorgu3->result();
        
        //KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI 
        //KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI 
        //KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI KPL BAŞLANGICI 
        
        $sorgu4=$this->db->query("SELECT * FROM kpl");
       $data["veri4"]=$sorgu4->result();
        
        foreach($data['veri4'] as $ks){
            
                    $k95=0;
                    $k75=0;
                    $gls926=0;
                    $k65=0;
                    $fk1=0;
                    $k650=0;
                    $k1=0;
                    $gls912=0;
                    $k2=0;
                    $k3=0;
                    $k5=0;
                    $k10=0;
                    $ustid=$ks->adi;
                    $altsorgu4=$this->db->query("SELECT * FROM kpl_alt WHERE kplust=$ustid");
                    $data["toplam4"]=$altsorgu4->result();
                    foreach($data['toplam4'] as $t1){
                        $durum=$t1->durum;
                        if($durum=="1"){
                            $k95=$t1->k95+$k95;
                            $k75=$t1->k75+$k75;
                            $gls926=$t1->gls926+$gls926;
                            $k65=$t1->k65+$k65;
                            $fk1=$t1->fk1+$fk1;
                            $k650=$t1->k650+$k650;
                            $k1=$t1->k1+$k1;
                            $gls912=$t1->gls912+$gls912;
                            $k2=$t1->k2+$k2;
                            $k3=$t1->k3+$k3;
                            $k5=$t1->k5+$k5;
                            $k10=$t1->k10+$k10;
                        };
                    };
    $data=array(
		"k95"=>$k95,
        "k75"=>$k75,
        "gls926"=>$gls926,
        "k65"=>$k65,
        "fk1"=>$fk1,
        "k650"=>$k650,
        "k1"=>$k1,
        "gls912"=>$gls912,
        "k2"=>$k2,
        "k3"=>$k3,
        "k5"=>$k5,
        "k10"=>$k10,
       
		);
        $this->Database_Model->update_data_degirmen("kpl",$data,$ustid);
            
            
        };
        
        //SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD 
        //SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD 
        //SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD SAYFA LOAD 
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/seperator_kapasite');
        $this->load->view('uye/_footer');
         
	}
    
    
}
