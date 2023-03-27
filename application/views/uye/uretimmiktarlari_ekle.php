</div>

<div class="content-page">
    <div class="content">
        <h1>Masraf Merkezi Kaydı Ekleme</h1>
        <hr>
        <div class="container-fluid">
            <div class="col-md-6" style="float:left;display:inline-block;">
                <form action="<?=base_url()?>uye/uretimmiktarlari/Uretimmiktarlari_ekle_kaydet" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ürün Adı</label>
                        <input type="text" class="form-control" name="urunad" required>

                    </div>
                    <input type="text" name="maliyetmuhasebe" value="<?php echo $maliyet_muhasebe['maliyet'];?>" hidden>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Ton</label>
                        <input type="text" class="form-control" name="ton" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ekle</button>
                </form>




            </div>
            <div class="col-md-6" style="float:left;display:inline-block;">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tarih</th>
                                <th>Kayıt Oluşturan</th>
                                <th>Ürün Adı</th>
                                <th>Ton</th>
                                <th>Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                       <?php    
                                $sql ="SELECT * FROM uretim_miktarlari_detay WHERE maliyet_muhasebe_id=".$maliyet_muhasebe['maliyet'];
                                $rapor_dep = $this->db->query($sql);
                            $kontrol=0;
                                foreach ($rapor_dep->result() as $depart){ if($depart->Id!=NULL){?>
                            <tr>
                                <td><?=$depart->Id?></td>
                                <td><?=$depart->tarih?></td>
                                <td><?=$depart->kayitolusturanadsoy?></td>
                                <td><?=$depart->mamul_adi?></td>
                                <td><?=$depart->ton?></td>
                                <td><a href="<?=base_url()?>uye/uretimmiktarlari/uretimmerkezikaydisil/<?=$depart->Id?>/<?=$depart->uretim_merkezi_id?>/<?=$depart->maliyet_muhasebe_id?>"><button type="submit" class="btn btn-danger">Sil</button></a></td>
                            </tr>
                            <?php $kontrol=$depart->Id;}}?>
                            <?php if($kontrol!=NULL && $kontrol!=0){?>
                            <td><a href="<?=base_url()?>uye/uretimmiktarlari/uretimmerkezikayditamamla/<?=$maliyet_muhasebe['maliyet']?>"><button class="btn btn-success" onclick="return confirm('Tamamlamak istediğinize emin misiniz?');">Tamamla</button></a></td>
                            <?php }?>
                        </tbody>
                    </table>
                </div>




            </div>
        </div>
    </div>
</div>
