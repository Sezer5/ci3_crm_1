</div>

               <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                     
        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Robotik Paketleme</h4>
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                           
                                            <tr>
                                                <th>Adı</th>
                                                <th>Değer 1</th>
                                                <th></th>
                                                <th>Değer 2</th>
                                                <th>Değer 3</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($robotikpaketleme as $ds){?>
                                            <?php if($ds->statikdeger=="1") {?>
                                            <form action="<?=base_url()?>uye/robotik/robotikpaketleme_guncelle/<?=$ds->Id?>" method="post">
                                            <tr>
                                              
                                               
                                                <th><?=$ds->adi?></th>
                                                <th><input type="text" id="simpleinput" class="form-control" name="deger1" value="<?=$ds->deger1?>"></th>
                                                <th><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-reload"></i> </button></th>
                                                <th><?=$ds->deger2?></th>
                                                <th><?=$ds->deger3?></th>             
                                            </tr>
                                            </form>
                                            <?php }else{?>
                                            <tr>
                                              
                                               
                                                <th><?=$ds->adi?></th>
                                                <th><?=$ds->deger1?></th>
                                                <th></th>
                                                <th><?=$ds->deger2?></th>
                                                <th><?=$ds->deger3?></th>             
                                            </tr>
                                            <?php }?>
                                           <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Forklift Akaryakıt</h4>
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                           <tr>
                                                <th>Adı</th>
                                                <th>Litre/Saat</th>
                                                <th></th>
                                                <th>VRD1</th>
                                                <th>VRD2</th>
                                                <th>VRD3</th>
                                                <th>Toplam</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           
                                             <?php foreach($robotikforklift as $ds){?>
                                             <?php if($ds->statikdeger=="1"){?>
                                              <form action="<?=base_url()?>uye/robotik/forklift_guncelle/<?=$ds->Id?>" method="post">
                                            <tr>
                                                <th><?=$ds->adi?></th>
                                                <th><input type="text" id="simpleinput" class="form-control" name="litre" value="<?=$ds->litre?>"></th>
                                                <th><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-reload"></i> </button></th>
                                                <th><?=$ds->vrd1?></th>
                                                <th><?=$ds->vrd2?></th>
                                                <th><?=$ds->vrd3?></th>
                                                <th><?=$ds->toplam?></th>
                                            </tr>
                                            </form>
                                            <?php }else{ ?>
                                            <tr>
                                                <th><?=$ds->adi?></th>
                                                <th><?=$ds->litre?></th>
                                                <th></th>
                                                <th><?=$ds->vrd1?></th>
                                                <th><?=$ds->vrd2?></th>
                                                <th><?=$ds->vrd3?></th>
                                                <th><?=$ds->toplam?></th>
                                            </tr>
                                            
                                            
                                           <?php }}?>
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER  -->
                        <!--DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER  -->
                        <!--DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER  -->
                        <!--DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER  -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Tablo - 2</h4>
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                           
                                            <tr>
                                                <th>Adı</th>
                                                <th>Ton/Saat</th>
                                                <th></th>
                                                <th>Saat/TL</th>
                                                <th>TL/TON</th>
                                                
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($robotiktablo2 as $ds){?>
                                            <?php if($ds->statikdeger=="1"){?>
                                            <form action="<?=base_url()?>uye/robotik/tablo2_guncelle/<?=$ds->Id?>" method="post">
                                            <tr>
                                              
                                               
                                                <th><?=$ds->adi?></th>
                                                <th><input type="text" id="simpleinput" class="form-control" value="<?=$ds->tonsaat?>" name="tonsaat"></th>
                                                <th><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-reload"></i> </button></th>
                                                <th><?=$ds->saattl?></th>
                                                <th><?=$ds->tlton?></th>
                                            </tr>
                                            </form>
                                            <?php }else{ ?>
                                            <tr>
                                              
                                               
                                                <th><?=$ds->adi?></th>
                                                <th><?=$ds->tonsaat?></th>
                                                <th></th>
                                                <th><?=$ds->saattl?></th>
                                                <th><?=$ds->tlton?></th>
                                            </tr>
                                            <?php }?>
                                           <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!-- 
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Dik Değirmenler - 2</h4>
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped table-bordered">
                                            <thead>
                                           <tr>
                                               
                                                <th>0,95µ</th>
                                                <th>0,85µ</th>
                                                <th>0,75µ</th>
                                                <th>0,65µ</th>
                                                <th>Hidrofil</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           
                                             <?php foreach($dikdegirmenler as $ds){?>
                                            <tr>
                                              
                                               
                                                
                                               
                                                <th><?=$ds->m095iki?></th>
                                                <th><?=$ds->m085iki?></th>
                                                <th><?=$ds->m075iki?></th>
                                                <th><?=$ds->m065iki?></th>
                                                <th><?=$ds->hidrofiliki?></th>
                                               
                                                
                                                 
                                            </tr>
                                           <?php }?>
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div> -->
                        </div>
             </div> </div> </div></div>