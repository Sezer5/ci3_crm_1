</div>
<!-- ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR -->

  
   <div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <h2>Seperatör Kapasite</h2>
                        </div>
                        <br><br><br><br><br>
                        <hr>
                        <center>
                            <h3 class="mt-0 header-title">Değirmenler</h3>
                        </center>
                                    <hr>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                    <tr>
                                        <th>Değirmen No</th>
                                        <th>Seperatör</th>
                                        <th>0,120µ
                                        </th>
                                        <th>0,95µ 
                                        </th>
                                        <th>0,85µ
                                        </th>
                                        <th>75µ
                                        </th>
                                        <th>65µ
                                        </th>
                                        <th>650µ
                                        </th>
                                        <th>1µ
                                        </th>
                                        <th>2µ
                                        </th>
                                        <th>3µ
                                        </th>
                                        <th>5µ
                                        </th>
                                        <th>10µ
                                        </th>
                                        <th>20µ
                                        </th>
                                        <th>40µ
                                        </th>
                                        <th>60µ
                                        </th>
                                        <th>80µ
                                        </th>
                                        <th>Durum</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $sql ="SELECT * FROM seperatorler";
                                            $query = $this->db->query($sql);
                                                if ($query->num_rows() > 0) {
                                                    foreach ($query->result() as $row) { 
                                        if($row->sira!='1'){
                                    ?>
                                    <form action="<?=base_url()?>uye/guncellemeler/degirmen_guncelle/<?=$row->Id?>" method="post">
                                    <tr>
                                        <th scope="row"><?=$row->degirmen_no?></th>
                                        <td><input type="text" class="form-control" name="adi"  value="<?=$row->adi?>"></td>
                                        <td><input type="text" class="form-control" name="m0120"  value="<?=$row->m0120?>"></td>
                                        <td><input type="text" class="form-control" name="m095"  value="<?=$row->m095?>"></td>
                                        <td><input type="text" class="form-control" name="m085"  value="<?=$row->m085?>"></td>
                                        <td><input type="text" class="form-control" name="m75"  value="<?=$row->m75?>"></td>
                                        <td><input type="text" class="form-control" name="m65"  value="<?=$row->m65?>"></td>
                                        <td><input type="text" class="form-control" name="m650"  value="<?=$row->m650?>"></td>
                                        <td><input type="text" class="form-control" name="m1"  value="<?=$row->m1?>"></td>
                                        <td><input type="text" class="form-control" name="m2"  value="<?=$row->m2?>"></td>
                                        <td><input type="text" class="form-control" name="m3"  value="<?=$row->m3?>"></td>
                                        <td><input type="text" class="form-control" name="m5"  value="<?=$row->m5?>"></td>
                                        <td><input type="text" class="form-control" name="m10"  value="<?=$row->m10?>"></td>
                                        <td><input type="text" class="form-control" name="m20"  value="<?=$row->m20?>"></td>
                                        <td><input type="text" class="form-control" name="m40"  value="<?=$row->m40?>"></td>
                                        <td><input type="text" class="form-control" name="m60"  value="<?=$row->m60?>"></td>
                                        <td><input type="text" class="form-control" name="m80"  value="<?=$row->m80?>"></td>
                                        <td><input type="text" class="form-control" name="durum"  value="<?=$row->durum?>"></td>
                                        <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>

                                    </tr>
                                     </form>
                                    <?php  }else{ 
                                       
                                    
                                    ?> 
                                    <form action="<?=base_url()?>uye/guncellemeler/degirmen_guncelle/<?=$row->Id?>" method="post">
                                    <tr>
                                        <th scope="row"><?=$row->degirmen_no?></th>
                                        <td><input type="text" class="form-control" name="adi"  value="<?=$row->adi?>"></td>
                                        <td><input type="text" class="form-control" name="m0120"  value="<?=$row->m0120?>"></td>
                                        <td><input type="text" class="form-control" name="m095"  value="<?=$row->m095?>"></td>
                                        <td><input type="text" class="form-control" name="m085"  value="<?=$row->m085?>"></td>
                                        <td><input type="text" class="form-control" name="m75"  value="<?=$row->m75?>"></td>
                                        <td><input type="text" class="form-control" name="m65"  value="<?=$row->m65?>"></td>
                                        <td><input type="text" class="form-control" name="m650"  value="<?=$row->m650?>"></td>
                                        <td><input type="text" class="form-control" name="m1"  value="<?=$row->m1?>"></td>
                                        <td><input type="text" class="form-control" name="m2"  value="<?=$row->m2?>"></td>
                                        <td><input type="text" class="form-control" name="m3"  value="<?=$row->m3?>"></td>
                                        <td><input type="text" class="form-control" name="m5"  value="<?=$row->m5?>"></td>
                                        <td><input type="text" class="form-control" name="m10"  value="<?=$row->m10?>"></td>
                                        <td><input type="text" class="form-control" name="m20"  value="<?=$row->m20?>"></td>
                                        <td><input type="text" class="form-control" name="m40"  value="<?=$row->m40?>"></td>
                                        <td><input type="text" class="form-control" name="m60"  value="<?=$row->m60?>"></td>
                                        <td><input type="text" class="form-control" name="m80"  value="<?=$row->m80?>"></td>
                                        <td><input type="text" class="form-control" name="durum"  value="<?=$row->durum?>"></td>
                                        <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>

                                    </tr>
                                     </form>
                                    <?php 
                                            $deg_no=$row->degirmen_no;
                                            $sql ="SELECT * FROM degirmenler WHERE adi=$deg_no";
                                            $query = $this->db->query($sql);
                                                if ($query->num_rows() > 0) {
                                                    foreach ($query->result() as $row) {?>
                                    
                                    
                                    <tr style="background-color:gray;">
                                        <th scope="row" style="color:white;">Toplam</th>
                                        <td><input type="text" class="form-control"  value="<?=$row->adi?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m0120?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m095?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m085?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m75?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m65?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m650?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m1?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m2?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m3?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m5?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m10?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m20?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m40?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m60?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m80?>"></td>
                                        <td><input type="text" class="form-control"  value=""></td>
                                        <td></td>

                                    </tr>
                                    
                                    
                                    
                                    <?php }}?>
                                    
                                    <?php }}}?>

                                </tbody>
                            </table>
                        </div>
                        

                    </div>

                </div>
                       <!--DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER -->
                       <!--DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER -->
                       <!--DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER -->
                       <!--DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER DİK DEĞİRMENLER -->
                        <hr>
                           <center>
                            <h3 class="mt-0 header-title">Dik Değirmenler</h3>
                        </center>
                                    <hr>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                    <tr>
                                        <th>Değirmen No</th>
                                        
                                        <th>0,120µ
                                        </th>
                                        <th>0,95µ 
                                        </th>
                                        <th>0,85µ
                                        </th>
                                        <th>0,65µ
                                        </th>
                                        <th>0,75µ
                                        </th>
                                        
                                        <th>Durum</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $sql ="SELECT * FROM dikdegirmenler WHERE Id!=1";
                                            $query = $this->db->query($sql);
                                                if ($query->num_rows() > 0) {
                                                    foreach ($query->result() as $row) { 
                                        
                                    ?>
                                    <form action="<?=base_url()?>uye/guncellemeler/dik_degirmen_guncelle/<?=$row->Id?>" method="post">
                                    <tr>
                                        
                                        <td><input type="text" class="form-control"  value="<?=$row->adi?>" name="adi"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m0120?>" name="m0120"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m095?>" name="m095"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m085?>" name="m085"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m065?>" name="m065"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->m075?>" name="m075"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->durum?>" name="durum"></td>
                                        <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>

                                    </tr>
                                     </form>
                                    
                                    
                                    <?php }}?>

                                </tbody>
                            </table>
                        </div>
                        

                    </div>

                </div>
                <!--KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER-->
                <!--KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER-->
                <!--KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER KPL DEĞİRMENLER-->
                <hr>
                        <center>
                            <h3 class="mt-0 header-title">KPL</h3>
                        </center>
                                    <hr>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                    <tr>
                                        <th>KPL Üst No</th>
                                        <th>İstasyon</th>
                                        <th>95K

                                        </th>
                                        <th>75K

                                        </th>
                                        <th>GLS 926

                                        </th>
                                         <th>65K

                                        </th>
                                        <th>1FK


                                        </th>
                                        <th>650K

                                        </th>
                                        <th>1K

                                        </th>
                                        <th>GLS 912

                                        </th>
                                        <th>2K 

                                        </th>
                                        <th>3K

                                        </th>
                                        <th>5K

                                        </th>
                                        <th>10K

                                        </th>
                                        <th>Durum</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $sql ="SELECT * FROM kpl_alt WHERE Id!=1";
                                            $query = $this->db->query($sql);
                                                if ($query->num_rows() > 0) {
                                                    foreach ($query->result() as $row) { 
                                        if($row->sira!='1'){
                                    ?>
                                    <form action="<?=base_url()?>uye/guncellemeler/kpl_guncelle/<?=$row->Id?>" method="post">
                                    <tr>
                                        <th scope="row"><?=$row->kplust?></th>
                                        <td><input type="text" class="form-control" name="ist"  value="<?=$row->ist?>"></td>
                                        <td><input type="text" class="form-control" name="k95"  value="<?=$row->k95?>"></td>
                                        <td><input type="text" class="form-control" name="k75"  value="<?=$row->k75?>"></td>
                                        <td><input type="text" class="form-control" name="gls926"  value="<?=$row->gls926?>"></td>
                                        <td><input type="text" class="form-control" name="k65"  value="<?=$row->k65?>"></td>
                                        <td><input type="text" class="form-control" name="fk1"  value="<?=$row->fk1?>"></td>
                                        <td><input type="text" class="form-control" name="k650"  value="<?=$row->k650?>"></td>
                                        <td><input type="text" class="form-control" name="k1"  value="<?=$row->k1?>"></td>
                                        <td><input type="text" class="form-control" name="gls912"  value="<?=$row->gls912?>"></td>
                                        <td><input type="text" class="form-control" name="k2"  value="<?=$row->k2?>"></td>
                                        <td><input type="text" class="form-control" name="k3"  value="<?=$row->k3?>"></td>
                                        <td><input type="text" class="form-control" name="k5"  value="<?=$row->k5?>"></td>
                                        <td><input type="text" class="form-control" name="k10"  value="<?=$row->k10?>"></td>
                                        <td><input type="text" class="form-control" name="durum"  value="<?=$row->durum?>"></td>
                                        
                                        <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>

                                    </tr>
                                     </form>
                                    <?php  }else{ 
                                       
                                    
                                    ?> 
                                   <form action="<?=base_url()?>uye/guncellemeler/kpl_guncelle/<?=$row->Id?>" method="post">
                                    <tr>
                                        <th scope="row"><?=$row->kplust?></th>
                                        <td><input type="text" class="form-control" name="ist"  value="<?=$row->ist?>"></td>
                                        <td><input type="text" class="form-control" name="k95"  value="<?=$row->k95?>"></td>
                                        <td><input type="text" class="form-control" name="k75"  value="<?=$row->k75?>"></td>
                                        <td><input type="text" class="form-control" name="gls926"  value="<?=$row->gls926?>"></td>
                                        <td><input type="text" class="form-control" name="k65"  value="<?=$row->k65?>"></td>
                                        <td><input type="text" class="form-control" name="fk1"  value="<?=$row->fk1?>"></td>
                                        <td><input type="text" class="form-control" name="k650"  value="<?=$row->k650?>"></td>
                                        <td><input type="text" class="form-control" name="k1"  value="<?=$row->k1?>"></td>
                                        <td><input type="text" class="form-control" name="gls912"  value="<?=$row->gls912?>"></td>
                                        <td><input type="text" class="form-control" name="k2"  value="<?=$row->k2?>"></td>
                                        <td><input type="text" class="form-control" name="k3"  value="<?=$row->k3?>"></td>
                                        <td><input type="text" class="form-control" name="k5"  value="<?=$row->k5?>"></td>
                                        <td><input type="text" class="form-control" name="k10"  value="<?=$row->k10?>"></td>
                                        <td><input type="text" class="form-control" name="durum"  value="<?=$row->durum?>"></td>
                                        
                                        <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>

                                    </tr>
                                     </form>
                                    <?php 
                                            $deg_no=$row->kplust;
                                            $sql ="SELECT * FROM kpl WHERE adi=$deg_no";
                                            $query = $this->db->query($sql);
                                                if ($query->num_rows() > 0) {
                                                    foreach ($query->result() as $row) {?>
                                    
                                    
                                    <tr style="background-color:gray;">
                                        <th scope="row" style="color:white;">Toplam</th>
                                        <td><input type="text" class="form-control"  value="<?=$row->adi?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->k95?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->k75?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->gls926?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->k65?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->fk1?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->k650?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->k1?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->gls912?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->k2?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->k3?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->k5?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->k10?>"></td>
                                        <td></td>
                                        
                                        
                                        <td></td>


                                    </tr>
                                    
                                    
                                    
                                    <?php }}?>
                                    
                                    <?php }}}?>

                                </tbody>
                            </table>
                        </div>
                        

                    </div>

                </div>
                <!--SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI -->
                <!--SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI -->
                <!--SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI -->
                <!--SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI SARKAÇ BAŞLANGICI -->
                       <hr>
                            <center>
                            <h3 class="mt-0 header-title">SARKAÇ</h3>
                        </center>
                                    <hr>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                    <tr>
                                        <th>Sarkaç No</th>
                                        <th>İstasyon</th>
                                        
                                        <th>100

                                        </th>
                                        <th>A100

                                        </th>
                                         <th>KA100

                                        </th>
                                        <th>Durum</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $sql ="SELECT * FROM srk_alt WHERE Id!=1";
                                            $query = $this->db->query($sql);
                                                if ($query->num_rows() > 0) {
                                                    foreach ($query->result() as $row) { 
                                        if($row->sira!='1'){
                                    ?>
                                    <form action="<?=base_url()?>uye/guncellemeler/sarkac_guncelle/<?=$row->Id?>" method="post">
                                    <tr>
                                        
                                        <td><input type="text" class="form-control"  value="<?=$row->srk_ust?>"></td>
                                        <td><input type="text" class="form-control" name="adi"  value="<?=$row->adi?>"></td>
                                        <td><input type="text" class="form-control" name="i100"  value="<?=$row->i100?>"></td>
                                        <td><input type="text" class="form-control" name="a100"  value="<?=$row->a100?>"></td>
                                        <td><input type="text" class="form-control" name="ka100"  value="<?=$row->ka100?>"></td>
                                        <td><input type="text" class="form-control" name="durum"  value="<?=$row->durum?>"></td>
                                        
                                        <td><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-reload"></i> </button></td>

                                    </tr>
                                     </form>
                                    <?php  }else{ 
                                       
                                    
                                    ?> 
                                   <form action="<?=base_url()?>uye/guncellemeler/sarkac_guncelle/<?=$row->Id?>" method="post">
                                    <tr>
                                        
                                        <td><input type="text" class="form-control"  value="<?=$row->srk_ust?>"></td>
                                        <td><input type="text" class="form-control" name="adi"  value="<?=$row->adi?>"></td>
                                        <td><input type="text" class="form-control" name="i100"  value="<?=$row->i100?>"></td>
                                        <td><input type="text" class="form-control" name="a100"  value="<?=$row->a100?>"></td>
                                        <td><input type="text" class="form-control" name="ka100"  value="<?=$row->ka100?>"></td>
                                        <td><input type="text" class="form-control" name="durum"  value="<?=$row->durum?>"></td>
                                        
                                        <td><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-reload"></i> </button></td>

                                    </tr>
                                     </form>
                                    <?php 
                                            $deg_no=$row->srk_ust;
                                            $sql ="SELECT * FROM srk WHERE adi=$deg_no";
                                            $query = $this->db->query($sql);
                                                if ($query->num_rows() > 0) {
                                                    foreach ($query->result() as $row) {?>
                                    
                                    
                                    <tr style="background-color:gray;">
                                         <th scope="row" style="color:white;">TOPLAM</th>
                                        <td><input type="text" class="form-control"  value="<?=$row->Id?>"></td>
                                        
                                        <td><input type="text" class="form-control"  value="<?=$row->i100?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->a100?>"></td>
                                        <td><input type="text" class="form-control"  value="<?=$row->ka100?>"></td>
                                        <td></td>
                                        
                                        <td></td>


                                    </tr>
                                    
                                    
                                    
                                    <?php }}?>
                                    
                                    <?php }}}?>

                                </tbody>
                            </table>
                        </div>
                        

                    </div>

                </div>
            </div>

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
        
   