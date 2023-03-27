<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Kullanıcı Düzenleme</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <tbody>
                                <?php foreach($veri as $rs){?>
                                <form action="<?=base_url()?>admin/kullanicilar/kullanici_guncelle/<?=$rs->Id?>" method="post">
                                    <tr>
                                        <th>Id</th>
                                        <td><?=$rs->Id?></td>
                                    </tr>
                                    <tr>
                                        <th>Kullanıcı Adı</th>
                                        <td><input type="text" name="user_id" value="<?=$rs->user_id?>" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Ad</th>
                                        <td><input type="text" name="ad" value="<?=$rs->ad?>" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Soyad</th>
                                        <td><input type="text" name="soyad" value="<?=$rs->soyad?>" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Unvan</th>
                                        <td><input type="text" name="unvan" value="<?=$rs->unvan?>" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td><input type="text" name="email" value="<?=$rs->email?>" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td><input type="text" name="password" value="<?=$rs->password?>" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Yetki</th>
                                        <td><input type="text" name="yetki" value="<?=$rs->yetki?>" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Telefon</th>
                                        <td><input type="text" name="tel" value="<?=$rs->tel?>" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Kısa Kod</th>
                                        <td><input type="text" name="kisakod" value="<?=$rs->kisakod?>" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Departman</th>
                                        <td>
                                            <select name="dep_id" class="form-control">
                                                <option value="<?=$rs->dep_id?>" selected="selected"><?=$rs->dep_adi?></option>
                                                <?php foreach($departmanlar as $ds){?>
                                                <option value="<?=$ds->Id?>"><?=$ds->dep_adi?></option>
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
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
