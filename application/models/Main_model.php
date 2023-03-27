<?php
class Main_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                
                
        }
	
	function getCity(){

    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('sehir');
    $response = $q->result_array();

    return $response;
  }

  // Get City departments
  function getCityDepartment($postData){
    $response = array();
 
    // Select record
    $this->db->select('Id,adi');
    $this->db->where('sehir_Id', $postData['city']);
    $q = $this->db->get('ilce');
    $response = $q->result_array();

    return $response;
  }
    
    
    function getFirma(){

    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('firmalar');
    $response = $q->result_array();

    return $response;
  }
    
    function getYetkili($postData){
    $response = array();
 
    // Select record
    $this->db->select('Id,ad,soyad');
    $this->db->where('firma_id', $postData['firma']);
    $q = $this->db->get('yetkili');
    $response = $q->result_array();

    return $response;
  }
    
    
    function getrakipFirma(){

    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('rakip_firmalar');
    $response = $q->result_array();

    return $response;
  }
    function getUrun($postData){
    $response = array();
 
    // Select record
    $this->db->select('Id,rakip_firma_id,urun_adi');
    $this->db->where('rakip_firma_id', $postData['rakip_firma']);
    $q = $this->db->get('rakip_firma_urunler');
    $response = $q->result_array();

    return $response;
  }

}
