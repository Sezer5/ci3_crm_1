<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Yetkili Düzenleme</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <tbody>
                                <form action="<?=base_url()?>admin/Firma_yetkilileri/firma_yetkilileri_guncelle" method="post">
                                   <?php foreach($veri as $rs){?>
                                   <input type="text" name="Id" class="form-control" value="<?=$rs->Id?>" hidden>
                                    <tr>
                                        <th>Ad</th>
                                        <td><input type="text" name="ad" class="form-control" value="<?=$rs->ad?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Soyad</th>
                                        <td><input type="text" name="soyad" class="form-control" value="<?=$rs->soyad?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Unvan</th>
                                        <td><input type="text" name="unvan" class="form-control" value="<?=$rs->unvan?>"></td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td><input type="text" name="email" class="form-control" value="<?=$rs->email?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Telefon</th>
                                        <td><input type="text" name="tel" class="form-control" value="<?=$rs->tel?>"></td>
                                    </tr>
                                    <?php }?>
                                    <tr>
                                        <th>Firma Adı</th>
                                        <td>
                                            <select name="firma_id" class="form-control">
                                               <?php foreach($veri as $ds){?>
                                                <option value="<?=$ds->firma_id?>"><?=$ds->firma_adi?></option>
                                                <?php }?>
                                                <?php foreach($firmalar as $ds){?>
                                                <option value="<?=$ds->Id?>"><?=$ds->firma_adi?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                    </tr>
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
