<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Firma - Temsilci Bağlantıları</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Temsilci</th>
                                    <th>Firma</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($veri as $rs){?>
                                <tr>
                                    <td><?=$rs->Id?></td>
                                    <td><?=$rs->temsilci_adi?> <?=$rs->temsilci_soyadi?></td>
                                    <td><?=$rs->temsilci_firma_adi?></td>
                                    <td>
                                        <a href="<?=base_url()?>admin/firma_temsilci/firma_temsilci_duzenle/<?=$rs->Id?>">
                                            <button type="button" class="btn btn-success"><i class="icon-magnifier"></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?=base_url()?>admin/firma_temsilci/firma_temsilci_sil/<?=$rs->Id?>">
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
                        <h1>Firma - Temsilci Bağlantısı Ekle</h1>
                    </div>
                    <div class="body table-responsive social_media_table">
                        <table class="table table-hover table-bordered mb-0">
                            <tbody>
                                <form action="<?=base_url()?>admin/firma_temsilci/firma_temsilci_ekle" method="post">
                                    <tr>
                                        <th>Firmalar</th>
                                        <td>
                                            <select name="firma_id" class="form-control">
                                                <?php foreach($firmalar as $ds){?>
                                                <option value="<?=$ds->Id?>"><?=$ds->firma_adi?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Temsilciler</th>
                                        <td>
                                            <select name="temsilci_id" class="form-control">
                                                <?php foreach($temsilciler as $ds){?>
                                                <option value="<?=$ds->Id?>"><?=$ds->ad?> <?=$ds->soyad?></option>
                                                <?php }?>
                                            </select>
                                        </td>
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
