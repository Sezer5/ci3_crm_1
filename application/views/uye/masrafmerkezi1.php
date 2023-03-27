</div>

<div class="content-page">
    <div class="content">
        <h1>Masraf Merkezi Kaydı Ekleme</h1>
        <hr>
        <div class="container-fluid">
           <div class="col-md-6">
            <form action="<?=base_url()?>uye/masrafmerkezikaydi/masrafmerkezikaydi_ekle" method="post">
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

                <button type="submit" class="btn btn-primary">Ekle</button>
            </form>




        </div>
    </div>
</div>
</div>
