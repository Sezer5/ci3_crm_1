<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h1>Firmalar</h1>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Cari Kodu</th>
                                    <th>Firma Adı</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($veri as $rs){?>
                                <tr>
                                    <td><?=$rs->Id?></td>
                                    <td><?=$rs->cari_kodu?></td>
                                    <td><?=$rs->firma_adi?></td>
                                    <td>
                                        <a href="<?=base_url()?>admin/firmalar/firmalar_duzenle/<?=$rs->Id?>">
                                            <button type="button" class="btn btn-success"><i class="icon-magnifier"></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?=base_url()?>admin/firmalar/firmalar_sil/<?=$rs->Id?>">
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
                        <h1>Firma Ekle</h1>
                    </div>
                    <div class="body table-responsive social_media_table">
                        <table class="table table-hover table-bordered mb-0">
                            <tbody>
                                <form action="<?=base_url()?>admin/firmalar/firmalar_ekle" method="post">
                                    <tr>
                                        <th>Firma Türü</th>
                                        <td>
                                            <select name="firma_turu_id" style="width:100%;" class="form-control">
                                                <option>-- Firma Türü Seçiniz --</option>
                                                <?php   foreach($firma_turleri as $yk){ ?>
                                                <option value="<?=$yk->Id?>"><?=$yk->tur_adi?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Firma Adı</th>
                                        <td><input type="text" name="firma_adi" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Cari Kodu</th>
                                        <td><input type="text" name="cari_kodu" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Tel</th>
                                        <td><input type="text" name="tel" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td><input type="text" name="email" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Web</th>
                                        <td><input type="text" name="web_adres" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>Sektörü</th>
                                        <td>
                                            <select name="sektor" style="width:100%;" class="form-control">
                                                <option>-- Sektör Seçiniz --</option>
                                                <?php   foreach($sektorler as $yk){ ?>
                                                <option value="<?=$yk->Id?>"><?=$yk->sektor_adi?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>İl</th>
                                        <td>
                                            <select id='city' name="city" style="width:100%;" class="form-control">
                                                <option>-- İl Seçiniz --</option>
                                                <?php   foreach($il as $yk){ ?>
                                                <option value="<?=$yk['Id']?>"><?=$yk['adi']?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>İlçe</th>
                                        <td>
                                            <select id='town' name="town" style="width:100%;" class="form-control">
                                                <option>-- İlçe Seçiniz --</option>
                                                <?php foreach($ilce as $u){?>
                                                <option value=".$u['Id']."><?=$u['adi']?></option>
                                                <?php  } ?>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Adres</th>
                                        <td><textarea name="adres" id="" cols="30" rows="10" class="form-control"></textarea></td>
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
    <script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
    <script type='text/javascript'>
        // baseURL variable
        var baseURL = "<?php echo base_url();?>";

        $(document).ready(function() {

            // City change
            $('#city').change(function() {
                var city = $(this).val();

                // AJAX request
                $.ajax({
                    url: '<?=base_url()?>admin/firmalar/getilceler',
                    method: 'post',
                    data: {
                        city: city
                    },
                    dataType: 'json',
                    success: function(response) {

                        // Remove options 
                        $('#town').find('option').not(':first').remove();

                        // Add options
                        $.each(response, function(index, data) {
                            $('#town').append('<option value="' + data['Id'] + '">' + data['adi'] + '</option>');
                        });
                    }
                });
            });
        });

    </script>
