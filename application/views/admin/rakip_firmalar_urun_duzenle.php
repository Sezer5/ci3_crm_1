<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Rakip Firma Ürün Düzenleme</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <tbody>
                                <form action="<?=base_url()?>admin/rakip_firmalar/rakip_firma_urun_guncelle" method="post">

                                    <tr>
                                        <th>Firma Adı</th>
                                        <td>
                                            <select name="rakip_firma_id" class="form-control">
                                                <?php   foreach($veri as $yk){ ?>
                                                    <option value="<?=$yk->rakip_firma_id?>"><?=$yk->firma_adi?></option>
                                                <?php }?>
                                                <?php foreach($rakip_firmalar as $rs){?>
                                                    <option value="<?=$rs->Id?>"><?=$rs->firma_adi?></option>
                                                <?php }?>

                                            </select>
                                        </td>

                                    </tr>
                                    <?php   foreach($veri as $yk){ ?>
                                    <tr>
                                        <th>Ürün Adı</th>
                                        <td><input type="text" name="urun_adi" value="<?=$yk->urun_adi?>" class="form-control"></td>
                                        <input type="text" name="Id" value="<?=$yk->Id?>" hidden>
                                    </tr>
                                    <?php }?>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-success" style="float:right"><i class="icon-reload"></i> Güncelle</button>
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
