<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Ürün Düzenleme</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <tbody>
                                <?php foreach($veri as $rs){?>
                                <form action="<?=base_url()?>admin/urunler/urunler_guncelle/<?=$rs->Id?>" method="post">
                                    <tr>
                                        <th>Id</th>
                                        <td><?=$rs->Id?></td>
                                    </tr>
                                    <tr>
                                        <th>Ürün Kodu</th>
                                        <td><input type="text" name="urun_kodu" value="<?=$rs->urun_kodu?>" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Ürün Adı</th>
                                        <td><input type="text" name="urun_adi" value="<?=$rs->urun_adi?>" class="form-control"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-success" style="float:right"><i class="icon-reload"></i> Güncelle</button>
                                        </td>
                                    </tr>
                                </form>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
