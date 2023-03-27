</div>

<div class="content-page">
    <div class="content">
        <h1>Üretim Miktarı Bekleyenler</h1>
        <hr>
        <div class="container-fluid">
           <div class="col-md-6">
            <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Kayıt Oluşturan Muhasebe Personeli</th>
                                                <th>Tarih</th>
                                                <th>Üretim Miktarı Girişi</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($veriler as $rs){?>
                                            <tr>
                                                <th><?=$rs->Id?></th>
                                                <td><?=$rs->kayitolusturanadsoy?></td>
                                                <td><?=$rs->tarih?></td>
                                                <td><a href="<?=base_url()?>uye/uretimmiktarlari/uretimmiktarlari_ekle/<?=$rs->Id?>"><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-plus"></i> </button></a></td>
                                                
                                            </tr>
                                            <?php }?>
                                            </tbody>
                                        </table>
                                    </div>



        </div>
    </div>
</div>
</div>
