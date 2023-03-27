<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uretimmiktarlari extends CI_Controller {

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
    
    public function Uretimmiktarlari()
	{   
        
        $sorgu=$this->db->query("SELECT * FROM maliyet_muhasebe WHERE muhasebe_durum=1");
        $data["veriler"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/uretimmiktarlari_liste');
        $this->load->view('uye/_footer');
        
	}
    public function Uretimmiktarlari_ekle($id)
	{   
        
        $data['maliyet_muhasebe'] = array(
             'maliyet' => $id,
             );
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/uretimmiktarlari_ekle');
        $this->load->view('uye/_footer');
        
	}
    public function Uretimmiktarlari_ekle_kaydet()
	{   
        $ton=$this->input->post('ton');
        $urunad=$this->input->post('urunad');
        $maliyet_muhasebe=$this->input->post('maliyetmuhasebe');
        
        $query=$this->db->query("SELECT * FROM uretim_miktarlari WHERE maliyet_muhasebe_id=$maliyet_muhasebe");
        if(empty($query->result())){
            
            $data=array(
		    'kayitolusturanadsoy'=>$this->session->oturum_uye['adsoy'],
            'kayitolusturanid'=>$this->session->oturum_uye['id'],
            'maliyet_muhasebe_id'=>$maliyet_muhasebe,
		);
        $this->Database_Model->insert_data("uretim_miktarlari",$data);
        $uretim_merkezi = $this->db->insert_id();
        $data=array(
		    'kayitolusturanadsoy'=>$this->session->oturum_uye['adsoy'],
            'kayitolusturanid'=>$this->session->oturum_uye['id'],
            'maliyet_muhasebe_id'=>$maliyet_muhasebe,
            'uretim_merkezi_id'=>$uretim_merkezi,
            'mamul_adi'=>$urunad,
            'ton'=>$ton,
		);
        $this->Database_Model->insert_data("uretim_miktarlari_detay",$data);
        } else {
        $sorgu=$this->db->query("SELECT * FROM uretim_miktarlari WHERE maliyet_muhasebe_id=$maliyet_muhasebe");
        $data["id_bulmak"]=$sorgu->result();
            $bulunan_id=0;
        foreach($data['id_bulmak'] as $is){
            $bulunan_id=$is->Id;
        };
        $data=array(
		    'kayitolusturanadsoy'=>$this->session->oturum_uye['adsoy'],
            'kayitolusturanid'=>$this->session->oturum_uye['id'],
            'maliyet_muhasebe_id'=>$maliyet_muhasebe,
            'uretim_merkezi_id'=>$bulunan_id,
            'mamul_adi'=>$urunad,
            'ton'=>$ton,
		);
        $this->Database_Model->insert_data("uretim_miktarlari_detay",$data);
        }
        
        redirect(base_url()."uye/uretimmiktarlari/Uretimmiktarlari_ekle/$maliyet_muhasebe");
        
	}
    function uretimmerkezikaydisil($id,$uretim,$muhasebe)
	{
        $maliyet_muhasebe=$muhasebe;
        $uretim_merkezi=$masraf;
        $this->db->query("DELETE FROM uretim_miktarlari_detay WHERE Id=$id");
        redirect(base_url()."uye/uretimmiktarlari/Uretimmiktarlari_ekle/$maliyet_muhasebe");
        
	}
    public function uretimmerkezikayditamamla($muhasebe)
	{   
        $ton=0;
        $maliyet_muhasebe=$muhasebe;
        $data=array(
		    'uretim_durum'=>"1",
		);
        $this->Database_Model->update_data("maliyet_muhasebe",$data,$maliyet_muhasebe);
        $sorgu=$this->db->query("SELECT SUM(ton) as toplamton FROM uretim_miktarlari_detay WHERE maliyet_muhasebe_id=$maliyet_muhasebe");
        $data["ton"]=$sorgu->result();
        foreach($data['ton'] as $bs){
            $ton=$bs->toplamton;
        };
        $data=array(
		    'uretim_toplam'=>$ton,
		);
        $this->Database_Model->update_data("maliyet_muhasebe",$data,$maliyet_muhasebe);
        
        $sorgu=$this->db->query("SELECT * FROM maliyet_muhasebe WHERE Id=$maliyet_muhasebe");
        $data["oran_bulmak"]=$sorgu->result();
            $bulunan_oran=0;
        foreach($data['oran_bulmak'] as $is){
            $bulunan_oran=$is->maliyet_uretim_orani;
        };
        $sorgu=$this->db->query("select *from yurticitablo_muhasebe where yurtici_ustid=(SELECT LAST_INSERT_ID())");
        $data["maliyet_son_ustid"]=$sorgu->result();
        $bulunan_ustid=0;
        foreach($data['maliyet_son_ustid'] as $is){
            $bulunan_ustid=$is->yurtici_ustid;
        };
        $sorgu=$this->db->query("select *from yurticitablo_muhasebe where yurtici_ustid=$bulunan_ustid");
        $data["maliyet_tablolar"]=$sorgu->result();
        
        $oranlartoplami=0;
        $gecici=0;
        foreach($data['maliyet_tablolar'] as $bs){
            if($bs->netmaliyet != NULL && $bs->netmaliyet != 0){
            $gecici=($bulunan_oran*100)/ $bs->netmaliyet;
            $oranlartoplami=$oranlartoplami+$gecici;};
        };
        $oranlartoplami=$oranlartoplami/31;
        $oranlartoplami=$oranlartoplami+1;                                                          //GENEL YÖNETİM GİDERİ SONUCU DİREK ORAN OLARAK ALINABİLİR.
                                                                                                    //$maliyet_muhasebe en üs id mikronizeort ve mikronize tabloları hesaplaamada üst id olarak idlendirilebilir.
        $data=array(
		    'gyg'=>$oranlartoplami,
		);
        $this->Database_Model->update_data("maliyet_muhasebe",$data,$maliyet_muhasebe);
        
        
	}
    
    
    
}
