<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>Analiz Ekleme Başlangıcı</h1>
                            <hr>
                            <table class="table table-hover table-bordered mb-0">
                                <tbody>
                                    <form action="<?=base_url()?>admin/analiz/analiz_baslat" method="post">
                                        <tr>
                                            <th>Firma Adı</th>
                                            <td>
                                                <select name="firma_id" class="form-control">
                                                    <?php foreach($veri as $rs){?>
                                                    <option value="<?=$rs->Id?>"><?=$rs->firma_adi?></option>
                                                    <?php }?>
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
                        <hr>
