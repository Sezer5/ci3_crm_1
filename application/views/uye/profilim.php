</div>
              
               <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="mt-0 mb-3 header-title">Profil Düzenleme</h4>
                                     <?php if ($this->session->flashdata('sonuc')){ ?>
                                           <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                Profil Güncelleme Başarılı Olmuştur.
                                            </div>
                                         <?php unset($_SESSION['sonuc']); }?>
                                <?php  foreach($veri as $rs){ ?>
                                    <form action="<?=base_url()?>uye/home/profil_guncelle_uye/<?=$rs->Id?>" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email adresi</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?=$rs->email?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Şifre</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?=$rs->password?>" >
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary">Gönder</button>
                                  </form> <?php } ?>
                                </div>
                            </div>
        
        

                    </div> </div> </div></div>