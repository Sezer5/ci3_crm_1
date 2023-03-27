<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Rakip Firma Düzenleme</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <tbody>
                                <form action="<?=base_url()?>admin/rakip_firmalar/rakip_firmalar_guncelle" method="post">
                                    <?php   foreach($veri as $yk){ ?>
                                    <tr>
                                        <th>Firma Adı</th>
                                        <input type="text" name="Id" class="form-control" value="<?=$yk->Id?>" hidden>
                                        <td><input type="text" name="firma_adi" class="form-control" value="<?=$yk->firma_adi?>"></td>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-success" style="float:right"><i class="icon-reload"></i> Güncelle</button>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>