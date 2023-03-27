</div>
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <!--DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER -->
                <!--DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER -->
                <!--DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER -->
                <!--DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER DEĞİRMENLER -->
                <div class="col-lg-12">
                    <div class="card-box">
                        <h2>Enerji</h2>
                        <hr>
                        <table>
                            <?php foreach($elektrik as $es){?>
                            <form action="<?=base_url()?>uye/enerji/elektrikbrfiyat_guncelle/<?=$es->Id?>" method="post">
                                <tr>
                                    <td><label for="">Elektrik Birim Fiyatı / TL</label></td>
                                    <td style="width:30px;"></td>
                                    <td> <input type="text" id="simpleinput" class="form-control" name="elektrik" value="<?=$es->yuzde?>"></td>
                                    <td><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-reload"></i> </button></td>
                                </tr>
                            </form>
                            <?php }?>
                        </table>
                        <hr>




                        <table class="table mb-0 table-bordered table-hover">

                            <tr>
                                <td style="width:20%;">

                                    <p>ÜNİTE</p>
                                </td>
                                <td style="width:20%;">
                                    <p>Tüketim (sa/Kwh)</p>
                                </td>
                                <td style="width:20%;">Güncelle</td>
                                
                            </tr>

                            <?php foreach($enerji as $es) {?>
                            <tr>
                                <td>
                                    <p><?=$es->unite?></p>
                                </td>
                                <form action="<?=base_url()?>uye/enerji/tuketim_guncelle/<?=$es->Id?>" method="post">
                                    <td>

                                        <input type="text" class="form-control" name="tuketim" value="<?=$es->tuketim?>">

                                    </td>
                                    <td><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="ti-reload"></i> </button></td>
                                </form>

                            </tr>
                            <?php }?>
                        </table>






                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
