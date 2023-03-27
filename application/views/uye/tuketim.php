</div>

               <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                     
        <div class="row">
                           <!--DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER -->
                           <!--DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER -->
                           <!--DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER -->
                           <!--DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER -->
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Değirmenler</h4>
                                    <div class="table-responsiveresponsive-table-plugin table-rep-plugin" data-pattern="priority-columns">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                            <tr>
                                               <form action="<?=base_url()?>uye/tuketim/gun_guncelle" method="post">
                                                <th colspan="2">Gün Değişkeni</th>
                                                <?php foreach($gundegiskeni as $gs){?>
                                                <th style="background-color:#f7f9fa;"><input type="text" class="form-control" name="deger" value="<?=$gs->gunluk?>"></th>
                                                <input type="text" name="gun" value="<?=$gs->Id?>" hidden>
                                                 <?php }?>
                                                <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                </form>
                                            </tr>
                                            <tr>
                                                <th>Değirmen</th>
                                                <th>Günlük Çalışma</th>
                                                <th>Aylık Çalışma</th>
                                                <th>Ö.K.</th>
                                                <th>Güncelle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($veri as $rs){?>
                                            <tr>
                                               <form action="<?=base_url()?>uye/tuketim/degirmen_guncelle/<?=$rs->Id?>" method="post">
                                                <th><input type="text" class="form-control" name="adi" value="<?=$rs->adi?>" readonly></th>
                                                <th><input type="text" class="form-control" name="gun" value="<?=$rs->gunluk?>"></th>
                                                <th><input type="text" class="form-control" name="ay" value="<?=$rs->aylik?>" readonly></th>
                                                <th><input type="text" class="form-control" name="ok" value="<?=$rs->ok?>"></th>
                                                 <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                 </form>
                                            </tr>
                                           <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
<!--KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL -->
<!--KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL -->
<!--KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL -->
<!--KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL KPL -->
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">KPL</h4>
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                            <tr>
                                               <form action="<?=base_url()?>uye/tuketim/gun_guncelle" method="post">
                                                <th colspan="2">Gün Değişkeni</th>
                                                <?php foreach($gundegiskeni as $gs){?>
                                                <th style="background-color:#f7f9fa;"><input type="text" class="form-control" name="deger" value="<?=$gs->gunluk?>"></th>
                                                <input type="text" name="gun" value="<?=$gs->Id?>" hidden>
                                                 <?php }?>
                                                <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                </form>
                                            </tr>
                                            <tr>
                                                <th>İstasyon</th>
                                                <th>Günlük Çalışma</th>
                                                <th>Aylık Çalışma</th>
                                                <th>Ö.K.</th>
                                                <th>Güncelle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($kpl as $ks){?>
                                            <tr>
                                               <form action="<?=base_url()?>uye/tuketim/kpl_guncelle/<?=$ks->Id?>" method="post">
                                                <th><input type="text" class="form-control" name="ist" value="<?=$ks->ist?>" readonly></th>
                                                <th><input type="text" class="form-control" name="gun" value="<?=$ks->gunluk?>"></th>
                                                <th><input type="text" class="form-control" name="ay" value="<?=$ks->aylik?>" readonly></th>
                                                <th><input type="text" class="form-control" name="ok" value="<?=$ks->ok?>"></th>
                                                   <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                   </form>
                                            </tr>
                                           <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!---Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen -->
                        <!---Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen -->
                        <!---Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen -->
                        <!---Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen Dik Değirmen -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Dik Değirmen</h4>
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                            <tr>
                                               <form action="<?=base_url()?>uye/tuketim/gun_guncelle" method="post">
                                                <th colspan="2">Gün Değişkeni</th>
                                                <?php foreach($gundegiskeni as $gs){?>
                                                <th style="background-color:#f7f9fa;"><input type="text" class="form-control" name="deger" value="<?=$gs->gunluk?>"></th>
                                                <input type="text" name="gun" value="<?=$gs->Id?>" hidden>
                                                 <?php }?>
                                                <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                </form>
                                            </tr>
                                            <tr>
                                                <th>Ünite</th>
                                                <th>Günlük Çalışma</th>
                                                <th>Aylık Çalışma</th>
                                                <th>Ö.K.</th>
                                                <th>Güncelle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($dikdegirmen as $ds){?>
                                            <tr>
                                               <form action="<?=base_url()?>uye/tuketim/dikdegirmen_guncelle/<?=$ds->Id?>" method="post">
                                                <th><input type="text" class="form-control" name="adi" value="<?=$ds->adi?>" readonly></th>
                                                <th><input type="text" class="form-control" name="gun" value="<?=$ds->gunluk?>"></th>
                                                <th><input type="text" class="form-control" name="ay" value="<?=$ds->aylik?>" readonly></th>
                                                <th><input type="text" class="form-control" name="ok" value="<?=$ds->ok?>"></th>
                                                 <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                </form>
                                            </tr>
                                           <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
<!--SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ -->
<!--SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ -->
<!--SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ -->
<!--SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ SARKAÇ -->
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Sarkaç</h4>
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                            <tr>
                                               <form action="<?=base_url()?>uye/tuketim/gun_guncelle" method="post">
                                                <th colspan="2">Gün Değişkeni</th>
                                                <?php foreach($gundegiskeni as $gs){?>
                                                <th style="background-color:#f7f9fa;"><input type="text" class="form-control" name="deger" value="<?=$gs->gunluk?>"></th>
                                                <input type="text" name="gun" value="<?=$gs->Id?>" hidden>
                                                 <?php }?>
                                                <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                </form>
                                            </tr>
                                            <tr>
                                                <th>Ünite</th>
                                                <th>Günlük Çalışma</th>
                                                <th>Aylık Çalışma</th>
                                                <th>Ö.K.</th>
                                                <th>Güncelle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($sarkac as $ss){?>
                                            <tr>
                                               <form action="<?=base_url()?>uye/tuketim/sarkac_guncelle/<?=$ss->Id?>" method="post">
                                                <th><input type="text" class="form-control" name="adi" value="<?=$ss->adi?>" readonly></th>
                                                <th><input type="text" class="form-control" name="gun" value="<?=$ss->gunluk?>"></th>
                                                <th><input type="text" class="form-control" name="ay" value="<?=$ss->aylik?>" readonly></th>
                                                <th><input type="text" class="form-control" name="ok" value="<?=$ss->ok?>"></th>
                                                 <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                 </form>
                                            </tr>
                                           <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                       <!--STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU -->
                       <!--STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU -->
                       <!--STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU -->
                       <!--STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU STEARİK ASİT TABLOSU -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Stearik Asit</h4>
                                    <div class="table-responsive responsive-table-plugin table-rep-plugin" data-pattern="priority-columns">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Mamül</th>
                                                <th>Ton/Kg</th>
                                                
                                                <th>Güncelle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($stasit as $sa){?>
                                            <tr>
                                               <form action="<?=base_url()?>uye/tuketim/stasit_guncelle/<?=$sa->Id?>" method="post">
                                                <th><input type="text" class="form-control" name="adi" value="<?=$sa->adi?>"></th>
                                                <th><input type="text" class="form-control" name="ton" value="<?=$sa->ton?>"></th>
                                                 <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                 </form>
                                            </tr>
                                           <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">1. İşçilik Tablosu</h4>
                                    <hr>
                                  <div class="table-responsive responsive-table-plugin table-rep-plugin" data-pattern="priority-columns">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Kalem Bilgisi</th>
                                                    <th>Değer 1</th>
                                                    <th></th>
                                                    <th>Değer 2</th>
                                                    <th>Değer 3</th>
                                                    <th>Değer 4</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php foreach($iscilik1 as $is){?>
                                               <?php if($is->statikdeger!=1){?>
                                                <tr>
                                                    <th><?=$is->adi?></th>
                                                    <td><?=$is->deger1?></td>
                                                    <td></td>
                                                    <td><?=$is->deger2?></td>
                                                    <td><?=$is->deger3?></td>
                                                    <td><?=$is->deger4?></td>
                                                </tr>
                                                <?php }else{?>
                                                <form action="<?=base_url()?>uye/tuketim/iscilik1_guncelle/<?=$is->Id?>" method="post">
                                                <tr>
                                                    <th><?=$is->adi?></th>
                                                    <td><input type="text" id="simpleinput" class="form-control" name="deger1" value="<?=$is->deger1?>"></td>
                                                    <td><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-reload"></i> </button></td>
                                                    <td><?=$is->deger2?></td>
                                                    <td><?=$is->deger3?></td>
                                                    <td><?=$is->deger4?></td>
                                                </tr>
                                                </form>
                                                <?php }?>
                                               <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            
                            </div>
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">1. Kişiler Tablosu</h4>
                                    <hr>
                                    <div class="table-responsive dragscroll">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Değer 1</th>
                                                    <th>Değer 2</th>
                                                    <th></th>
                                                    <th>Kalem Bilgisi</th>
                                                    <th>Değer 3</th>
                                                    <th></th>
                                                    <th>Değer 4</th>
                                                    <th>Değer 5</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php foreach($iscilik1kisiler as $iss){?>
                                               <?php if($iss->statikdeger==12){ ?>
                                               <form action="<?=base_url()?>uye/tuketim/iscilik1kisilerdeger12_guncelle/<?=$iss->Id?>" method="post">
                                                <tr>
                                                    
                                                    <td><input type="text" id="simpleinput" class="form-control" name="deger1" value="<?=$iss->deger1?>"></td>
                                                    <td><input type="text" id="simpleinput" class="form-control" name="deger2" value="<?=$iss->deger2?>"></td>
                                                    <td><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-reload"></i> </button></td>
                                                    <th><?=$iss->adi?></th>
                                                    <td><?=$iss->deger3?></td>
                                                    <td></td>
                                                    <td><?=$iss->deger4?></td>
                                                    <td><?=$iss->deger5?></td>
                                                </tr>
                                                </form>
                                                <?php }elseif($iss->statikdeger==3){ ?>
                                                <form action="<?=base_url()?>uye/tuketim/iscilik1kisilerdeger3_guncelle/<?=$iss->Id?>" method="post">
                                                <tr>
                                                    
                                                    <td><?=$iss->deger1?></td>
                                                    <td><?=$iss->deger2?></td>
                                                    <td></td>
                                                    <th><?=$iss->adi?></th>
                                                    <td><input type="text" id="simpleinput" class="form-control" name="deger3" value="<?=$iss->deger3?>"></td>
                                                    <td><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-reload"></i> </button></td>
                                                    <td><?=$iss->deger4?></td>
                                                    <td><?=$iss->deger5?></td>
                                                </tr>
                                                </form>
                                                <?php }else{ ?>
                                                
                                                <tr>
                                                    
                                                    <td><?=$iss->deger1?></td>
                                                    <td><?=$iss->deger2?></td>
                                                    <td></td>
                                                    <th><?=$iss->adi?></th>
                                                    <td><?=$iss->deger3?></td>
                                                    <td></td>
                                                    <td><?=$iss->deger4?></td>
                                                    <td><?=$iss->deger5?></td>
                                                </tr>
                                                
                                               <?php }}?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            
                            </div>
                            
                        </div>
                        <!-- end row -->

                        <div class="row">
                            

                            
                        </div>
                       

                    </div> </div> </div></div>
                    
        <!-- Vendor js -->
        <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>

        <!-- Responsive Table js -->
        <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

        <!-- Init js -->
        <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

        <!-- App js -->
        <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>