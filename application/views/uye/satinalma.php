</div>

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-6">
                    <div class="card-box">


                        <h4 class="header-title mt-0">Palet Fiyatları</h4>

                        <div class="widget-chart text-center">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Yurtiçi</th>
                                            <th>Yurtdışı</th>
                                            <th>Değiştir</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($paletler as $ps){?>
                                        <form action="<?=base_url()?>uye/satinalma/paletguncelle/<?=$ps->Id?>" method="post">
                                            <tr>
                                                <td><?=$ps->Id?></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="yurtici" value="<?=$ps->yurtici?>"></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="yurtdisi" value="<?=$ps->yurtdisi?>"></td>
                                                <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>

                                            </tr>
                                        </form>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <h4 class="header-title mt-0" style="float:left;">Stearik Asit</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Adı</th>
                                            <th>Değeri</th>
                                            <th>Değiştir</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($sa as $ps){?>
                                        <form action="<?=base_url()?>uye/satinalma/saguncelle/<?=$ps->Id?>" method="post">
                                            <tr>
                                                <td><?=$ps->Id?></td>
                                                <td><?=$ps->adi?></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="deger1" value="<?=$ps->deger1?>"></td>
                                                <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>

                                            </tr>
                                        </form>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-xl-6">
                    <div class="card-box">


                        <h4 class="header-title mt-0">Öğütme Kolaylaştırıcı</h4>

                        <div class="widget-chart text-center">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Adı</th>
                                            <th>Yüzde</th>
                                            <th>Değer1</th>
                                            <th>Değer2</th>
                                            <th>Değer3</th>
                                            <th>Bilgi</th>
                                            <th>Değiştir</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($ok as $ps){?>
                                        <form action="<?=base_url()?>uye/satinalma/okguncelle/<?=$ps->Id?>" method="post">
                                            <tr>
                                                <td><?=$ps->Id?></td>
                                                <td><?=$ps->adi?></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="yuzde" value="<?=$ps->yuzde?>"></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="deger1" value="<?=$ps->deger1?>"></td>
                                                <td><?=$ps->deger2?></td>
                                                <td><?=$ps->deger3?></td>
                                                <td><?=$ps->bilgi?></td>
                                                <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>

                                            </tr>
                                        </form>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <h4 class="header-title mt-0" style="float:left;">Torba Maliyetleri</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>PP Torba</th>
                                            <th>Kraft</th>
                                            <th>Big Bag</th>
                                            <th>Q Bag</th>
                                            <th>Sling Bag</th>
                                            <th>Strech</th>
                                            <th>Değiştir</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($torbamaliyetleri as $ps){?>
                                        <form action="<?=base_url()?>uye/satinalma/torbaguncelle/<?=$ps->Id?>" method="post">
                                            <tr>
                                                <td><?=$ps->Id?></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="pp_torba" value="<?=$ps->pp_torba?>"></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="kraft" value="<?=$ps->kraft?>"></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="bigbag" value="<?=$ps->bigbag?>"></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="qbag" value="<?=$ps->qbag?>"></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="slingbag" value="<?=$ps->slingbag?>"></td>
                                                <td><input type="text" id="simpleinput" class="form-control" name="strecth" value="<?=$ps->strecth?>"></td>
                                                <td><button class="btn btn-icon waves-effect waves-light btn-success" type="submit"> <i class="ti-reload"></i> </button></td>

                                            </tr>
                                        </form>
                                        <?php } ?>


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
