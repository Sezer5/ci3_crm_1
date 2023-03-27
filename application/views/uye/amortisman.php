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
                            <div class="col-lg-10">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Amortisman</h4>
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-bordered">
                                            <thead>
                                            <tr>
                                               
                                                <th colspan="2">Faydalı Ömür / Yıl</th>
                                                <?php foreach($faydaliomur as $fs){?>
                                                <form action="<?=base_url()?>uye/amortisman/faydaliomur_guncelle/<?=$fs->Id?>" method="post">
                                                <th style="background-color:#f7f9fa;" colspan="3"><input type="text" class="form-control" name="omur" value="<?=$fs->deger1?>"></th>
                                                
                                                
                                                <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                </form>
                                               <?php }?>
                                            </tr>
                                            <tr>
                                                <th>Adı</th>
                                                <th>Cari Değer</th>
                                                <th>Yıl / TL</th>
                                                <th>Ay / TL</th>
                                                <th>Saat / TL</th>
                                                <th>Değer 1</th>
                                                <th>Güncelle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                             <?php foreach($amortisman as $as) {?>
                                            <tr>
                                             <form action="<?=base_url()?>uye/amortisman/amortismandeger1_guncelle/<?=$as->Id?>" method="post">
                                                <th><input type="text" class="form-control" name="adi" value="<?=$as->adi?>" readonly></th>
                                                <th><input type="text" class="form-control" name="carideger" value="<?=$as->carideger?>" readonly></th>
                                                <th><input type="text" class="form-control" name="yiltl" value="<?=$as->yiltl?>" readonly></th>
                                                <th><input type="text" class="form-control" name="aytl" value="<?=$as->aytl?>" readonly></th>
                                                <th><input type="text" class="form-control" name="saattl" value="<?=$as->saattl?>" readonly></th>
                                                <th><input type="text" class="form-control" name="deger1" value="<?=$as->deger1?>"></th>
                                                 <th style="background-color:#f7f9fa;" colspan="2"><button class="btn btn-icon waves-effect waves-light btn-success" style="float:right;"> <i class="ti-reload"></i> </button></th>
                                                </form>
                                            </tr>
                                           <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div></div> </div></div>