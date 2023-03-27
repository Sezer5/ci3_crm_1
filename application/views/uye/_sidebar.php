 </div>
 <div class="left-side-menu">

     <div class="slimscroll-menu">

         <!-- User box -->
         <div class="user-box text-center">
             <img src="<?=base_url()?>assets/admin/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
             <div class="dropdown">
                 <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown" aria-expanded="false"><?=$this->session->oturum_uye['adsoy']?></a>
                 
             </div>
             
             <p class="text-muted"><?=$this->session->oturum_uye['dep']?></p>
             <ul class="list-inline">
                <hr>
             </ul>
             
         </div>
        <div class="user-box text-center">
                        
                        <div class="dropdown">
                            
                            <div class="dropdown-menu user-pro-dropdown">

                                
    
                            </div>
                        </div>
                        
                        
                    </div>
         
         <div id="sidebar-menu">

             <ul class="metismenu" id="side-menu">

                 <li class="menu-title" style="font-weight:bold;color:black;">Menü<hr></li>

                 <li>
                     <a href="<?=base_url()?>uye/Home">
                         <i class="ti-home"></i>

                         <span> Anasayfa </span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/home/profilim">
                         <i class="ti-user"></i>

                         <span>Profilim</span>
                     </a>
                 </li>
                 <?php if($this->session->oturum_uye['dep']=="Muhasebe" || $this->session->oturum_uye['dep_id']=="1"){?>
                 <li>
                     <a href="<?=base_url()?>uye/birimfiyat/birim_fiyat">
                         <i class=" fas fa-coins"></i>

                         <span>Birim Fiyat</span>
                     </a>
                 </li>
                <li>
                     <a href="<?=base_url()?>uye/tuketim/tuketim">
                         <i class=" fas fa-search-minus"></i>

                         <span>Tüketim</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/amortisman/amortisman">
                         <i class=" dripicons-battery-low"></i>

                         <span>Amortisman</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/enerji/enerji">
                         <i class="ti-bolt"></i>

                         <span>Enerji</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/tablolar/seperator_kapasite">
                         <i class="fas fa-asterisk"></i>

                         <span>Seperatör Kapasite</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/robotik/robotik">
                         <i class="fas fa-robot"></i>

                         <span>Robotik</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/masrafmerkezikaydi/masrafmerkezikaydi1">
                         <i class="ti-plus"></i>

                         <span>Masraf Merkezi Kaydı</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/masrafmerkezikaydi/masrafmerkezikayitlari">
                         <i class="ti-search"></i>

                         <span>Eski Masraf Merkezi Kayıtları</span>
                     </a>
                 </li>
                 <?php }?>
                 <?php if($this->session->oturum_uye['dep']=="Üretim" || $this->session->oturum_uye['dep_id']=="2"){?>
                 <li>
                     <a href="<?=base_url()?>uye/uretimmiktarlari/uretimmiktarlari">
                         <i class="fas fa-balance-scale"></i>

                         <span>Üretim Miktarları</span>
                     </a>
                 </li>
                
                 <?php }?>
                 <?php if($this->session->oturum_uye['dep']=="Satın Alma" || $this->session->oturum_uye['dep_id']=="3"){?>
                 <li>
                     <a href="<?=base_url()?>uye/satinalma/satinalma">
                         <i class="ti-money"></i>

                         <span>Satın Alma Değerleri</span>
                     </a>
                 </li>
                
                 <?php }?>
                 <?php if($this->session->oturum_uye['dep']=="Pazarlama" || $this->session->oturum_uye['dep_id']=="4"){?>
                 <li>
                     <a href="<?=base_url()?>uye/gerceklesen/birimfiyat/birim_fiyat">
                         <i class=" fas fa-coins"></i>

                         <span>Birim Fiyat</span>
                     </a>
                 </li>
                <li>
                     <a href="<?=base_url()?>uye/gerceklesen/tuketim/tuketim">
                         <i class=" fas fa-search-minus"></i>

                         <span>Tüketim</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/gerceklesen/amortisman/amortisman">
                         <i class=" dripicons-battery-low"></i>

                         <span>Amortisman</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/gerceklesen/enerji/enerji">
                         <i class="ti-bolt"></i>

                         <span>Enerji</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/gerceklesen/tablolar/seperator_kapasite">
                         <i class="fas fa-asterisk"></i>

                         <span>Seperatör Kapasite</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/gerceklesen/robotik/robotik">
                         <i class="fas fa-robot"></i>

                         <span>Robotik</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url()?>uye/gerceklesen/robotik/robotik">
                         <i class=" fas fa-file-excel"></i>

                         <span>Gerçekleşen Maliyet Örnek Excel İndir</span>
                     </a>
                 </li>
                 <?php }?>
             </ul>

         </div>
       

         <div class="clearfix"></div>

     </div>
     