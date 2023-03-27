</div>
<!-- ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-8">
                    <div class="card-box">
                        <h2>Tablo 1</h2>
                        <div class="table-responsive responsive-table-plugin table-rep-plugin" data-pattern="priority-columns">
                            <table class="table mb-0 table table-striped mb-0 table table-bordered mb-0" id="tech-companies-1">
                                <thead>
                                    <tr>
                                        <th>Adı</th>
                                        <th>Yüzde</th>
                                        <th>Değer 1</th>
                                        <th>Değer 2</th>
                                        <th>Değer 3</th>
                                        <th>Bilgi</th>
                                        <th>Çarpan</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($veri as $rs){?>
                                   <form action="<?=base_url()?>uye/birimfiyat/tablo1_guncelle/<?=$rs->Id?>" method="post">
                                    <tr>
                                        <td style="background-color:gray;"><input type="text" class="form-control" name="adi" value="<?=$rs->adi?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=$rs->adi?>">
                                        </td>
                                        <td><input type="text" class="form-control" name="yuzde"  value="<?=$rs->yuzde?>"></td>
                                        <td><input type="text" class="form-control" name="deger1"  value="<?=$rs->deger1?>"></td>
                                        <td><input type="text" class="form-control" name="deger2"  value="<?=$rs->deger2?>"></td>
                                        <td><input type="text" class="form-control" name="deger3"  value="<?=$rs->deger3?>"></td>
                                        <td><input type="text" class="form-control" name="bilgi"  value="<?=$rs->bilgi?>"></td>
                                        <td><input type="text" class="form-control" name="carpan"  value="<?=$rs->carpan?>"></td>
                                        <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>
                                    </tr>
                                    </form>
                                   <?php }?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="card-box">
                        <h4 class="header-title">Tablo 2</h4>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-dark mb-0">
                                <thead>
                                   
                                    <tr>
                                        <th>Adı</th>
                                        <th>Yüzde</th>
                                        <th></th>
                                        <th>Gerçek Oran</th>
                                        
                                        <th>Güncelle</th>
                                    </tr>
                                    
                                    
                                </thead>
                                <tbody>
                                   <?php foreach($veriler as $ts){?>
                                   <form action="<?=base_url()?>uye/birimfiyat/tablo2_guncelle/<?=$ts->Id?>" method="post">
                                    <tr>
                                        <td style="background-color:gray;"><input type="text" class="form-control" name="adi" value="<?=$ts->adi?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=$ts->aciklama?>">
                                        </td>
                                        <td><?=$ts->yuzde?></td>
                                        <td style="background-color:gray;"><input type="text" class="form-control" name="adi2" value="<?=$ts->adi2?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=$ts->adi2?>">
                                        <td><input type="text" class="form-control" name="gercekoran"  value="<?=$ts->gercekoran?>"></td>
                                        
                                         <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>
                                    </tr>
                                    </form>
                                   <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!--- end row -->


            

        </div>
    </div>
</div>
</div>


        <!-- Vendor js -->
        <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>

        <!-- Responsive Table js -->
        <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

        <!-- Init js -->
        <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

        <!-- App js -->
        <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>