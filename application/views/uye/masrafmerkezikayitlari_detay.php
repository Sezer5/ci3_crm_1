</div>
<!-- ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR -->

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <h1>Önceki Masraf Merkezi Kayıtları</h1>
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kaydı Oluşturan Personel</th>
                                <th>Masraf Merkezi Kodu</th>
                                <th>Masraf Merkezi Adı</th>
                                <th>Masraf Merkezi Borç</th>

                            </tr>
                        </thead>
                        <tbody>
                           <?php foreach($veriler as $rs){?>
                            <tr>
                                <th><?=$rs->Id?></th>
                                <td><?=$rs->kayitolusturanadsoy?></td>
                                <td><?=$rs->mmkodu?></td>
                                <td><?=$rs->mmadi?></td>
                                <td><?=$rs->borc?></td>

                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
