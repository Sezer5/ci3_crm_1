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
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Profile-withicon"><i class="fa fa-user"></i> Etkinlik Düzenle</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="Profile-withicon">
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h1>Etkinlik Bilgileri</h1>
                                        </div>
                                        <div class="body table-responsive social_media_table">
                                            <table class="table table-hover table-bordered mb-0">
                                                <tbody>
                                                    <?php foreach($veri as $rs){?>
                                                    <tr>
                                                        <th>Etkinlik Türü</th>
                                                        <td><?=$rs->etkinlik_tur_adi?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Etkinlik Türü Miktarı (Varsa)</th>
                                                        <td><?=$rs->etkinlik_tur_birim?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Satış Temsilcisi</th>
                                                        <td><?=$rs->etkinlik_temsilci_adi?> <?=$rs->etkinlik_temsilci_soyadi?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Firma</th>
                                                        <td><?=$rs->etkinlik_firma_adi?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Firma Yetkilisi</th>
                                                        <td><?=$rs->etkinlik_yetkili_adi?> <?=$rs->etkinlik_yetkili_soyadi?></td>
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
                                            <h1>Etkinlik Bilgileri</h1>
                                        </div>
                                        <div class="body table-responsive social_media_table">
                                            <table class="table table-hover table-bordered mb-0">
                                                <tbody>
                                                    <?php foreach($veri as $rs){?>
                                                    <form action="<?=base_url()?>admin/etkinlikler/etkinlikler_guncelle/<?=$rs->Id?>" method="post">
                                                        <?php }?>
                                                        <tr>
                                                            <th>Etkinlik Türü</th>
                                                            <td>
                                                                <select name="tur_id" class="form-control">
                                                                    <?php foreach($etkinlik_turleri as $rs){?>
                                                                    <option value="<?=$rs->Id?>"><?=$rs->tur_adi?> (Etkinlik Birimi: <?=$rs->birim?>)</option>
                                                                    <?php }?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Etkinlik Türü Miktarı (Varsa)</th>
                                                            <td><input type="text" name="tur_miktar" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Satış Temsilcisi</th>
                                                            <td>
                                                                <select name="temsilci_id" class="form-control">
                                                                    <?php foreach($admin as $rs){?>
                                                                    <option value="<?=$rs->Id?>"><?=$rs->ad?> <?=$rs->soyad?></option>
                                                                    <?php }?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Firma</th>
                                                            <td>
                                                                <select id='firma' name="firma" style="width:100%;" class="form-control">
                                                                    <option>-- Firma Seçiniz --</option>
                                                                    <?php   foreach($firma as $yk){ ?>
                                                                    <option value="<?=$yk['Id']?>"><?=$yk['firma_adi']?></option>
                                                                    <?php }?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Firma Yetkilisi</th>
                                                            <td>
                                                                <select id='town' name="town" style="width:100%;" class="form-control">
                                                                    <option>-- Yetkili Seçiniz --</option>
                                                                    <?php foreach($ilce as $u){?>
                                                                    <option value=".$u['Id']."><?=$u['adi']?></option>
                                                                    <?php  } ?>
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
            $('#firma').change(function() {
                var firma = $(this).val();

                // AJAX request
                $.ajax({
                    url: '<?=base_url()?>admin/etkinlikler/getYetkili',
                    method: 'post',
                    data: {
                        firma: firma
                    },
                    dataType: 'json',
                    success: function(response) {

                        // Remove options 
                        $('#town').find('option').not(':first').remove();

                        // Add options
                        $.each(response, function(index, data) {
                            $('#town').append('<option value="' + data['Id'] + '">' + data['ad'] + ' ' + data['soyad'] + '</option>');
                        });
                    }
                });
            });
        });

    </script>
