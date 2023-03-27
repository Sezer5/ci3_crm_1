</div>
<div class="content-page">
    <div class="content">
        <h1>Masraf Merkezi Kaydı Ekleme</h1>
        <hr>
        <div class="container-fluid">
            <div class="col-md-6" style="display:inline-block;float:left">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Masraf Merkezi Kodu</th>
                                <th>Masraf Merkezi Adı</th>
                                <th>Borç</th>
                                <th>Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($veriler as $rs){?>
                            <tr>
                                <td><?=$rs->mmkodu?></td>
                                <td><?=$rs->mmadi?></td>
                                <td><?=$rs->borc?> TL</td>
                                <td><a href="<?=base_url()?>uye/masrafmerkezikaydi/masrafmerkezikaydisil/<?=$rs->Id?>/<?=$rs->masraf_merkezi_id?>/<?=$rs->maliyet_muhasebe_id?>"><button type="submit" class="btn btn-danger">Sil</button></a></td>
                            </tr>
                            <?php $masrafmerkezi=$rs->masraf_merkezi_id; $maliyet_muhasebe_id=$rs->maliyet_muhasebe_id; }?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="col-md-6" style="display:inline-block;float:left">
                <form action="<?=base_url()?>uye/masrafmerkezikaydi/masrafmerkezikaydiekle2/<?=$masrafmerkezi?>/<?=$maliyet_muhasebe_id?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masraf Merkezi Kodu</label>
                        <input type="text" class="form-control" name="mmkodu" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Masraf Merkezi Adı</label>
                        <input type="text" class="form-control" name="mmadi" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Borç</label>
                        <input type="text" class="form-control" name="borc" required>
                    </div>
                    <div class="form-group">
                        <table style="width:100%;">
                            <tr>
                                <td><button type="submit" class="btn btn-primary">Ekle</button></td>
                            </tr>
                        </table>
                    </div>
                </form>
                <div class="form-group">
                    <table style="width:100%;">
                        <tr>

                            <td style="text-align:right;"><a href="<?=base_url()?>uye/masrafmerkezikaydi/masrafmerkezikayditamamla/<?=$maliyet_muhasebe_id?>"><button class="btn btn-success" onclick="return confirm('Tamamlamak istediğinize emin misiniz?');">Tamamla</button></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
