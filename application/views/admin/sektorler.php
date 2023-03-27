<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Sektörler</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Sektör Adı</th>
                                    <th>Düzelt</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($veri as $rs){?>
                                <tr>
                                    <td><?=$rs->Id?></td>
                                    <form action="<?=base_url()?>admin/sektorler/sektorler_guncelle/<?=$rs->Id?>" method="post">
                                        <td><input type="text" name="sektor_adi" class="form-control" value="<?=$rs->sektor_adi?>"></td>
                                        <td><button type="submit" class="btn btn-success"><i class="icon-refresh"></i></button></td>
                                    </form>
                                    <td>
                                        <a href="<?=base_url()?>admin/sektorler/sektorler_sil/<?=$rs->Id?>">
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
                        <h1>Sektör Ekle</h1>
                    </div>
                    <div class="body table-responsive social_media_table">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Sektör Adı</th>
                                    <th>Ekle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <form action="<?=base_url()?>admin/sektorler/sektorler_ekle" method="post">
                                        <td><input type="text" name="sektor_adi" class="form-control"></td>
                                        <td><button type="submit" class="btn btn-success"><i class="icon-plus"></i></button></td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
