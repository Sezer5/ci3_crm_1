 <div id="main-content">
     <div class="container-fluid">
         <br>
         <div class="row clearfix">
             <div class="col-lg-12">
                 <div class="card">
                     <!--
                    <div class="header">
                        <h2>Tabs With Icon</h2>
                    </div> -->
                     <div class="body">
                         <ul class="nav nav-tabs">
                             <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-withicon"><i class="fa fa-home"></i> Rakip Firmalar</a></li>
                             <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-withicon"><i class="icon-diamond"></i> Rakip Firmalar Ürünleri</a></li>
                         </ul>
                         <div class="tab-content">
                             <div class="tab-pane show active" id="Home-withicon">
                                 <div class="col-lg-12 col-md-12">
                                     <div class="row">
                                         <div class="col-lg-6 col-md-12">
                                             <div class="card">
                                                 <div class="header">
                                                     <h1>Rakip Firmalar</h1>
                                                 </div>
                                                 <div class="body table-responsive">
                                                     <table class="table table-hover table-bordered mb-0">
                                                         <thead>
                                                             <tr>
                                                                 <th>Id</th>
                                                                 <th>Firma Adı</th>
                                                                 <th>Düzenle</th>
                                                                 <th>Sil</th>
                                                             </tr>
                                                         </thead>
                                                         <tbody>
                                                             <?php foreach($veri as $rs){?>
                                                             <tr>
                                                                 <td><?=$rs->Id?></td>
                                                                 <td><?=$rs->firma_adi?></td>
                                                                 <td>
                                                                     <a href="<?=base_url()?>admin/rakip_firmalar/rakip_firmalar_duzenle/<?=$rs->Id?>">
                                                                         <button type="button" class="btn btn-success"><i class="icon-magnifier"></i></button>
                                                                     </a>
                                                                 </td>
                                                                 <td>
                                                                     <a href="<?=base_url()?>admin/rakip_firmalar/rakip_firmalar_sil/<?=$rs->Id?>">
                                                                         <button type="button" class="btn btn-danger"><i class="icon-trash"></i></button>
                                                                     </a>
                                                                 </td>
                                                             </tr>
                                                             <?php }?>
                                                         </tbody>
                                                     </table>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-lg-6 col-md-12">
                                             <div class="card">
                                                 <div class="header">
                                                     <h1>Rakip Firma Ekle</h1>
                                                 </div>
                                                 <div class="body table-responsive social_media_table">
                                                     <table class="table table-hover table-bordered mb-0">
                                                         <tbody>
                                                             <form action="<?=base_url()?>admin/rakip_firmalar/rakip_firmalar_ekle" method="post">
                                                                 <tr>
                                                                     <th>Firma Adı</th>
                                                                     <td><input type="text" name="firma_adi" class="form-control"></td>
                                                                     <td>
                                                                         <button type="submit" class="btn btn-success" style="float:right"><i class="icon-plus"></i> Ekle</button>
                                                                     </td>
                                                                 </tr>
                                                             </form>
                                                         </tbody>
                                                     </table>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="tab-pane" id="Profile-withicon">
                                 <div class="col-lg-12 col-md-12">
                                     <div class="row">
                                         <div class="col-lg-6 col-md-12">
                                             <div class="card">
                                                 <div class="header">
                                                     <h1>Rakip Ürünler</h1>
                                                 </div>
                                                 <div class="body table-responsive">
                                                     <table class="table table-hover table-bordered mb-0">
                                                         <thead>
                                                             <tr>
                                                                 <th>Id</th>
                                                                 <th>Firma Adı</th>
                                                                 <th>Ürün Adı</th>
                                                                 <th>Düzenle</th>
                                                                 <th>Sil</th>
                                                             </tr>
                                                         </thead>
                                                         <tbody>
                                                             <?php foreach($urunler as $rs){?>
                                                             <tr>
                                                                 <td><?=$rs->Id?></td>
                                                                 <td><?=$rs->firma_adi?></td>
                                                                 <td><?=$rs->urun_adi?></td>
                                                                 <td>
                                                                     <a href="<?=base_url()?>admin/rakip_firmalar/rakip_firmalar_urun_duzenle/<?=$rs->Id?>">
                                                                         <button type="button" class="btn btn-success"><i class="icon-magnifier"></i></button>
                                                                     </a>
                                                                 </td>
                                                                 <td>
                                                                     <a href="<?=base_url()?>admin/rakip_firmalar/rakip_firmalar_urun_sil/<?=$rs->Id?>">
                                                                         <button type="button" class="btn btn-danger"><i class="icon-trash"></i></button>
                                                                     </a>
                                                                 </td>
                                                             </tr>
                                                             <?php }?>
                                                         </tbody>
                                                     </table>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-lg-6 col-md-12">
                                             <div class="card">
                                                 <div class="header">
                                                     <h1>Rakip Ürün Ekle</h1>
                                                 </div>
                                                 <div class="body table-responsive social_media_table">
                                                     <table class="table table-hover table-bordered mb-0">
                                                         <tbody>
                                                             <form action="<?=base_url()?>admin/rakip_firmalar/rakip_firmalar_urun_ekle" method="post">
                                                                 <tr>
                                                                     <th>Firma Adı</th>
                                                                     <td>
                                                                         <select name="rakip_firma_id" class="form-control">
                                                                             <?php foreach($veri as $rs){?>
                                                                             <option value="<?=$rs->Id?>"><?=$rs->firma_adi?></option>
                                                                             <?php }?>
                                                                         </select>
                                                                     </td>
                                                                 </tr>
                                                                 <tr>
                                                                     <th>Ürün Adı</th>
                                                                     <td><input type="text" name="urun_adi" class="form-control"></td>
                                                                 </tr>
                                                                 <tr>
                                                                     <td colspan="2">
                                                                         <button type="submit" class="btn btn-success" style="float:right"><i class="icon-plus"></i> Ekle</button>
                                                                     </td>
                                                                 </tr>
                                                             </form>
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
                 </div>
             </div>


         </div>
     </div>
