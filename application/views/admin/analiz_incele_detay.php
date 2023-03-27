<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="card">
                <div class="col-lg-12">
                    <h1>Firma Bilgileri</h1>
                    <hr>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Analiz Id</th>
                                    <th>Firma Cari Kodu</th>
                                    <th>Firma Sektörü</th>
                                    <th>Firma Adı</th>
                                    <th>Tel</th>
                                    <th>E-mail</th>
                                    <th>İl</th>
                                    <th>İlçe</th>
                                    <th>Firma Türü</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($veri as $rs){?>
                                <tr>
                                    <td><?=$rs->Id?></td>
                                    <td><?=$rs->cari_kodu?></td>
                                    <td><?=$rs->firma_sektorler_adi?></td>
                                    <td><?=$rs->firma_adi?></td>
                                    <td><?=$rs->tel?></td>
                                    <td><?=$rs->email?></td>
                                    <td><?=$rs->firma_sehir_adi?></td>
                                    <td><?=$rs->firma_ilce_adi?></td>
                                    <td><?=$rs->firma_tur_adi?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="col-lg-12">
                <h1>Temsilci Bilgileri</h1>
                <hr>
                <div class="body table-responsive">
                    <table class="table table-hover table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Temsilci</th>
                                <th>Unvan</th>
                                <th>E-mail</th>
                                <th>Tel</th>
                                <th>Kısa Kod</th>
                                <th>Firma</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($temsilci as $rs){?>
                            <tr>
                                <td><?=$rs->Id?></td>
                                <td><?=$rs->temsilci_adi?> <?=$rs->temsilci_soyadi?></td>
                                <td><?=$rs->unvan?></td>
                                <td><?=$rs->email?></td>
                                <td><?=$rs->tel?></td>
                                <td><?=$rs->kisakod?></td>
                                <td><?=$rs->temsilci_firma_adi?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="header">
                    <h1>Rakip Ürünler</h1>
                </div>
                <div class="body table-responsive">
                    <table class="table-hover table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Tedarikçi Sırası</th>
                                <th>Rakip Firma</th>
                                <th>Rakip Ürün</th>
                                <th>Paketleme</th>
                                <th>Fiyat</th>
                                <th>Kapasite</th>
                                <th>Kapasite Birimi</th>
                                <th>Periyot</th>
                                <th>Beyazlık Önemi</th>
                                <th>Beyazlık Derecesi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rakip_urunler as $rs){?>
                            <tr>
                                <td><?=$rs->tedarikci_sirasi?></td>
                                <td><?=$rs->rakip_firma_adi?></td>
                                <td><?=$rs->rakip_urun_adi?></td>
                                <td><?=$rs->rakip_paketleme_adi?></td>
                                <td><?=$rs->fiyat?></td>
                                <td><?=$rs->kapasite?></td>
                                <td><?=$rs->kapasite_birim?></td>
                                <?php 
                                                                    $periyot=0;
                                                                    if($rs->periyot == 1){
                                                                        $periyot="Günlük";
                                                                    }elseif($rs->periyot == 7){
                                                                        $periyot="Haftalık";
                                                                    }elseif($rs->periyot == 30){
                                                                        $periyot="Aylık";
                                                                    }elseif($rs->periyot == 180){
                                                                        $periyot="6 Aylık";
                                                                    }elseif($rs->periyot == 360){
                                                                        $periyot="Yıllık";
                                                                    }else{
                                                                        $periyot="0";
                                                                    };
                                                                                                
                                                                    $beyazlik_onemi=0;
                                                                    if($rs->beyazlik_onemi == 1){
                                                                        $beyazlik_onemi="Evet";
                                                                    }elseif($rs->beyazlik_onemi == 0){
                                                                        $beyazlik_onemi="Hayır";
                                                                    }else{
                                                                        $beyazlik_onemi="0";
                                                                    };
                                                                                                
                                                                    $beyazlik_derecesi=0;
                                                                    if($rs->beyazlik_derecesi == 0){
                                                                        $beyazlik_derecesi="Beyaz";
                                                                    }elseif($rs->beyazlik_derecesi == 1){
                                                                        $beyazlik_derecesi="K.Beyaz";
                                                                    }else{
                                                                        $beyazlik_derecesi="0";
                                                                    };
                                                                                                
                                                                                                
                                                                                                
                                                                ?>
                                <td><?=$periyot?></td>
                                <td><?=$beyazlik_onemi?></td>
                                <td><?=$beyazlik_derecesi?></td>
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
                    <h1>Şirket Ürünleri</h1>
                </div>
                <div class="body table-responsive">
                    <table class="table-hover table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Tedarikçi Sırası</th>
                                <th>Firma</th>
                                <th>Ürün</th>
                                <th>Paketleme</th>
                                <th>Fiyat</th>
                                <th>Kapasite</th>
                                <th>Kapasite Birimi</th>
                                <th>Periyot</th>
                                <th>Beyazlık Önemi</th>
                                <th>Beyazlık Derecesi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($sirket as $rs){?>
                            <tr>
                                <td><?=$rs->tedarikci_sirasi?></td>
                                <td>Niğtaş A.Ş.</td>
                                <td><?=$rs->urun_adi?></td>
                                <td><?=$rs->paketleme_adi?></td>
                                <td><?=$rs->fiyat?></td>
                                <td><?=$rs->kapasite?></td>
                                <td><?=$rs->kapasite_birim?></td>
                                <?php 
                                                                    $periyot=0;
                                                                    if($rs->periyot == 1){
                                                                        $periyot="Günlük";
                                                                    }elseif($rs->periyot == 7){
                                                                        $periyot="Haftalık";
                                                                    }elseif($rs->periyot == 30){
                                                                        $periyot="Aylık";
                                                                    }elseif($rs->periyot == 180){
                                                                        $periyot="6 Aylık";
                                                                    }elseif($rs->periyot == 360){
                                                                        $periyot="Yıllık";
                                                                    }else{
                                                                        $periyot="0";
                                                                    };
                                                                                                
                                                                    $beyazlik_onemi=0;
                                                                    if($rs->beyazlik_onemi == 1){
                                                                        $beyazlik_onemi="Evet";
                                                                    }elseif($rs->beyazlik_onemi == 0){
                                                                        $beyazlik_onemi="Hayır";
                                                                    }else{
                                                                        $beyazlik_onemi="0";
                                                                    };
                                                                                                
                                                                    $beyazlik_derecesi=0;
                                                                    if($rs->beyazlik_derecesi == 0){
                                                                        $beyazlik_derecesi="Beyaz";
                                                                    }elseif($rs->beyazlik_derecesi == 1){
                                                                        $beyazlik_derecesi="K.Beyaz";
                                                                    }else{
                                                                        $beyazlik_derecesi="0";
                                                                    };
                                                                                                
                                                                                                
                                                                                                
                                                                ?>
                                <td><?=$periyot?></td>
                                <td><?=$beyazlik_onemi?></td>
                                <td><?=$beyazlik_derecesi?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
