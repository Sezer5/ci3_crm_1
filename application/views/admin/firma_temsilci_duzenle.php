<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Firma - Temsilci Bağlantısı Düzenleme</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Temsilci</th>
                                    <th>Firma</th>
                                    <th>Güncelle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($veri as $rs){?>
                                <form action="<?=base_url()?>admin/firma_temsilci/firma_temsilci_guncelle" method="post">
                                    <tr>
                                        <td><input type="text" name="Id" value="<?=$rs->Id?>" class="form-control" readonly></td>
                                        <td>
                                            <select name="temsilci_id" class="form-control">
                                                <option value="<?=$rs->temsilci_id?>"><?=$rs->temsilci_adi?> <?=$rs->temsilci_soyadi?></option>
                                                <?php foreach($temsilciler as $ds){?>
                                                <option value="<?=$ds->Id?>"><?=$ds->ad?> <?=$ds->soyad?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="firma_id" class="form-control">
                                                <option value="<?=$rs->firma_id?>"><?=$rs->temsilci_firma_adi?></option>
                                                <?php foreach($firmalar as $ds){?>
                                                <option value="<?=$ds->Id?>"><?=$ds->firma_adi?></option>
                                                <?php }?>
                                            </select>
                                        </td>

                                        <td>
                                            <button type="submit" class="btn btn-success"><i class="icon-reload"></i></button>
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
