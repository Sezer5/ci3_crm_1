<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Analiz İnceleme</h1>
                            <hr>
                            <table class="table table-responsive table-hover table-bordered mb-0">
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
                                        <th>İncele</th>
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
                                        <td>
                                            <a href="<?=base_url()?>admin/Analiz_incele/Analiz_incele_detay/<?=$rs->Id?>">
                                                <button type="submit" class="btn btn-success"><i class="icon-magnifier"></i> İncele</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        