<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Kullanıcılar</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Kullanıcı</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($veri as $rs){?>
                                <tr>
                                    <td><?=$rs->Id?></td>
                                    <td><?=$rs->ad?> <?=$rs->soyad?></td>
                                    <td>
                                        <a href="<?=base_url()?>admin/kullanicilar/kullanicilar_duzenle/<?=$rs->Id?>">
                                            <button type="button" class="btn btn-success"><i class="icon-magnifier"></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?=base_url()?>admin/kullanicilar/kullanici_sil/<?=$rs->Id?>">
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
                        <h1>Kullanıcı Ekle</h1>
                    </div>
                    <div class="body table-responsive social_media_table">
                        <table class="table table-hover table-bordered mb-0">
                            <tbody>
                                <form action="<?=base_url()?>admin/kullanicilar/kullanici_ekle" method="post">
                                   <tr>
                                        <th>Kullanıcı Adı</th>
                                        <td><input type="text" name="user_id" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Ad</th>
                                        <td><input type="text" name="ad" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Soyad</th>
                                        <td><input type="text" name="soyad" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Unvan</th>
                                        <td><input type="text" name="unvan" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td><input type="text" name="email" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td><input type="text" name="password" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Yetki</th>
                                        <td><input type="text" name="yetki" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Telefon</th>
                                        <td><input type="text" name="tel" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Kısa Kod</th>
                                        <td><input type="text" name="kisakod" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Departman</th>
                                        <td>
                                            <select name="dep_id" class="form-control">
                                                <?php foreach($departmanlar as $ds){?>
                                                <option value="<?=$ds->Id?>"><?=$ds->dep_adi?></option>
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
