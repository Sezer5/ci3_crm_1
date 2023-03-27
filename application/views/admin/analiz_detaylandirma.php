<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <!--
                    <div class="header">
                        <h2>Tabs With Icon</h2>
                    </div> -->
                    <div class="body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-withicon"><i class="fa fa-home"></i> Firma Bilgileri</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-withicon"><i class="fa fa-user"></i> Rakip Firma İşlemleri</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Settings-withicon"><i class="fa fa-user"></i> Şirket İşlemleri</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="Home-withicon">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">

                                        <?php foreach($firma_bilgileri as $rs){?>
                                        <div class="header">
                                            <table class="table">
                                                <tr>
                                                    <td>
                                                        <h1><?=$rs->firma_adi?></h1>
                                                    </td>
                                                    <td style="text-align: right;">
                                                        <h1><?=$rs->firma_tur_adi?></h1>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <?php }?>
                                        <hr>
                                        <div class="body table-responsive">
                                            <table class="table table-hover table-bordered mb-0">
                                                <?php foreach($firma_bilgileri as $rs){?>
                                                <tr>
                                                    <th>Sektör:</th>
                                                    <td><?=$rs->firma_sektorler_adi?></td>
                                                </tr>
                                                <tr>
                                                    <th>Cari Kodu:</th>
                                                    <td><?=$rs->cari_kodu?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tel:</th>
                                                    <td><?=$rs->tel?></td>
                                                </tr>
                                                <tr>
                                                    <th>E-mail:</th>
                                                    <td><?=$rs->email?></td>
                                                </tr>
                                                <tr>
                                                    <th>Web:</th>
                                                    <td><?=$rs->web_adres?></td>
                                                </tr>
                                                <tr>
                                                    <th>İl/İlçe:</th>
                                                    <td><?=$rs->firma_sehir_adi?> / <?=$rs->firma_ilce_adi?></td>
                                                </tr>
                                                <tr>
                                                    <th>Adres:</th>
                                                    <td><textarea cols="30" rows="5" class="form-control" readonly><?=$rs->adres?></textarea></td>
                                                </tr>
                                                <?php }?>
                                            </table>
                                        </div>
                                        <a href="<?=base_url()?>admin/home">
                                            <button type="button" class="btn btn-success" style="float:right;"><i class="icon-check"></i> Analiz Girişini Bitir</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Profile-withicon">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h1>Rakip Firma Ürünleri</h1>
                                                </div>
                                                <div class="body table-responsive">
                                                    <table class="table table-hover table-bordered mb-0">
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
                                                                <th>Sil</th>
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
                                                                <td>
                                                                    <a href="<?=base_url()?>admin/Analiz/firma_rakip_urun_sil/<?=$rs->Id?>/<?=$rs->analiz_id?>">
                                                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Sil</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h1>Rakip Firma Ürünü Ekle</h1>
                                                </div>
                                                <div class="body table-responsive social_media_table">
                                                    <table class="table table-hover table-bordered mb-0">
                                                        <tbody>
                                                            <form action="<?=base_url()?>admin/Analiz/firma_rakip_urun_ekle" method="post">
                                                                <tr>
                                                                    <th>Tedarikçi Sırası</th>
                                                                    <td>
                                                                        <select name="tedarikci_sirasi" class="form-control">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rakip Firma</th>
                                                                    <td>
                                                                        <select id='rakip_firma' name="rakip_firma" class="form-control">
                                                                            <option>-- Firma Seçiniz --</option>
                                                                            <?php   foreach($rakip_firma as $yk){ ?>
                                                                            <option value="<?=$yk['Id']?>"><?=$yk['firma_adi']?></option>
                                                                            <?php }?>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Rakip Ürün</th>
                                                                    <td>
                                                                        <select id='town' name="town" class="form-control">
                                                                            <option>-- Ürün Seçiniz --</option>
                                                                            <?php foreach($rakipurun as $u){?>
                                                                            <option value=".$u['Id']."><?=$u['urun_adi']?></option>
                                                                            <?php  } ?>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Paketleme</th>
                                                                    <td>
                                                                        <select name="paketleme_id" class="form-control">
                                                                            <option>-- Paketleme Tipi Seçiniz --</option>
                                                                            <?php foreach($paketlemeler as $u){?>
                                                                            <option value="<?=$u->Id?>"><?=$u->paket_adi?></option>
                                                                            <?php  } ?>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <input type="text" name="analiz_no" class="form-control" value="<?=$analiz_no?>" hidden>
                                                                <input type="text" name="firma_no" class="form-control" value="<?=$firma_no?>" hidden>
                                                                <tr>
                                                                    <th>Kapasite</th>
                                                                    <td><input type="text" name="kapasite" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Kapasite Birimi</th>
                                                                    <td>
                                                                        <select name="kapasite_birim" class="form-control">
                                                                            <option>-- Kapasite Birimi Seçiniz --</option>
                                                                            <option value="kg">KG</option>
                                                                            <option value="ton">TON</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Fiyat</th>
                                                                    <td><input type="text" name="fiyat" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Periyot</th>
                                                                    <td>
                                                                        <select name="periyot" class="form-control">
                                                                            <option>-- Periyot Seçiniz --</option>
                                                                            <option value="1">Günlük</option>
                                                                            <option value="7">Haftalık</option>
                                                                            <option value="30">Aylık</option>
                                                                            <option value="180">6 Aylık</option>
                                                                            <option value="360">Yıllık</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Beyazlık Önemi</th>
                                                                    <td>
                                                                        <select name="beyazlik_onemi" class="form-control">
                                                                            <option>-- Beyazlık Önemi Seçiniz --</option>
                                                                            <option value="1">Evet</option>
                                                                            <option value="0">Hayır</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Beyazlık Derecesi</th>
                                                                    <td>
                                                                        <select name="beyazlik_derecesi" class="form-control">
                                                                            <option>-- Beyazlık Derecesi Seçiniz --</option>
                                                                            <option value="0">Beyaz</option>
                                                                            <option value="1">K.Beyaz</option>
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
                            </div>
                            <div class="tab-pane" id="Settings-withicon">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h1>Firma Ürünleri</h1>
                                                </div>
                                                <div class="body table-responsive">
                                                    <table class="table table-hover table-bordered mb-0">
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
                                                                <th>Sil</th>
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
                                                                <td>
                                                                    <a href="<?=base_url()?>admin/Analiz/sirket_urun_sil/<?=$rs->Id?>/<?=$rs->analiz_id?>">
                                                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Sil</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h1>Firma Ürünü Ekle</h1>
                                                </div>
                                                <div class="body table-responsive social_media_table">
                                                    <table class="table table-hover table-bordered mb-0">
                                                        <tbody>
                                                            <form action="<?=base_url()?>admin/Analiz/sirket_urun_ekle" method="post">
                                                                <tr>
                                                                    <th>Tedarikçi Sırası</th>
                                                                    <td>
                                                                        <select name="tedarikci_sirasi" class="form-control">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Firma</th>
                                                                    <td>
                                                                        <input type="text" value="Niğtaş A.Ş." class="form-control" readonly>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Ürün</th>
                                                                    <td>
                                                                        <select name="firma_urun" class="form-control">
                                                                            <option>-- Ürün Seçiniz --</option>
                                                                            <?php foreach($urunler as $u){?>
                                                                            <option value="<?=$u->Id?>"><?=$u->urun_adi?></option>
                                                                            <?php  } ?>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Paketleme</th>
                                                                    <td>
                                                                        <select name="paketleme_id" class="form-control">
                                                                            <option>-- Paketleme Tipi Seçiniz --</option>
                                                                            <?php foreach($paketlemeler as $u){?>
                                                                            <option value="<?=$u->Id?>"><?=$u->paket_adi?></option>
                                                                            <?php  } ?>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <input type="text" name="analiz_no" class="form-control" value="<?=$analiz_no?>" hidden>
                                                                <input type="text" name="firma_no" class="form-control" value="<?=$firma_no?>" hidden>

                                                                <tr>
                                                                    <th>Kapasite</th>
                                                                    <td><input type="text" name="kapasite" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Kapasite Birimi</th>
                                                                    <td>
                                                                        <select name="kapasite_birim" class="form-control">
                                                                            <option>-- Kapasite Birimi Seçiniz --</option>
                                                                            <option value="kg">KG</option>
                                                                            <option value="ton">TON</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Fiyat</th>
                                                                    <td><input type="text" name="fiyat" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Periyot</th>
                                                                    <td>
                                                                        <select name="periyot" class="form-control">
                                                                            <option>-- Periyot Seçiniz --</option>
                                                                            <option value="1">Günlük</option>
                                                                            <option value="7">Haftalık</option>
                                                                            <option value="30">Aylık</option>
                                                                            <option value="180">6 Aylık</option>
                                                                            <option value="360">Yıllık</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Beyazlık Önemi</th>
                                                                    <td>
                                                                        <select name="beyazlik_onemi" class="form-control">
                                                                            <option>-- Beyazlık Önemi Seçiniz --</option>
                                                                            <option value="1">Evet</option>
                                                                            <option value="0">Hayır</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Beyazlık Derecesi</th>
                                                                    <td>
                                                                        <select name="beyazlik_derecesi" class="form-control">
                                                                            <option>-- Beyazlık Derecesi Seçiniz --</option>
                                                                            <option value="0">Beyaz</option>
                                                                            <option value="1">K.Beyaz</option>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
    <script type='text/javascript'>
        // baseURL variable
        var baseURL = "<?php echo base_url();?>";

        $(document).ready(function() {

            // firma change
            $('#rakip_firma').change(function() {
                var rakip_firma = $(this).val();

                // AJAX request
                $.ajax({
                    url: '<?=base_url()?>admin/Analiz/getUrun',
                    method: 'post',
                    data: {
                        rakip_firma: rakip_firma
                    },
                    dataType: 'json',
                    success: function(response) {

                        // Remove options 
                        $('#town').find('option').not(':first').remove();

                        // Add options
                        $.each(response, function(index, data) {
                            $('#town').append('<option value="' + data['Id'] + '">' + data['urun_adi'] + '</option>');
                        });
                    }
                });
            });
        });

    </script>
