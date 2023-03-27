<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Paketleme Tipleri</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Paketleme Adı</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($veri as $rs){?>
                                <tr>
                                    <td><?=$rs->Id?></td>
                                    <td><?=$rs->paket_adi?></td>
                                    <td>
                                        <a href="<?=base_url()?>admin/paketlemeler/paketlemeler_duzenle/<?=$rs->Id?>">
                                            <button type="button" class="btn btn-success"><i class="icon-magnifier"></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?=base_url()?>admin/paketlemeler/paketlemeler_sil/<?=$rs->Id?>">
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
                        <h1>Paketleme Tipi Ekle</h1>
                    </div>
                    <div class="body table-responsive social_media_table">
                        <table class="table table-hover table-bordered mb-0">
                            <tbody>
                                <form action="<?=base_url()?>admin/paketlemeler/paketlemeler_ekle" method="post">
                                    <tr>
                                        <th>Paketleme Adı</th>
                                        <td><input type="text" name="paket_adi" class="form-control"></td>
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
