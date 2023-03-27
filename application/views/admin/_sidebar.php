    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="<?=base_url()?>uploads/logoA4.jpg" class="circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span><?=$this->session->oturum_data['ad']?> <?=$this->session->oturum_data['soyad']?></span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?=$this->session->oturum_data['unvan']?></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="<?=base_url()?>admin/home/profilim"><i class="icon-user"></i>Profilim</a></li>

                        <li class="divider"></li>
                        <li><a href="<?=base_url()?>admin/login/logout"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>


            </div>
            <!-- Nav tabs -->
            <ul class="nav">
                <div class="tab-pane" id="setting">
                    <ul class="list-unstyled mt-3">
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-switch">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Gece Modu</span>
                        </li>
                    </ul>


                </div>
            </ul>
            <hr>
            <div class="tab-content padding-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu li_animation_delay">
                            <li>
                                <a href="<?=base_url()?>admin/home"><i class="icon-home"></i><span> Ana Sayfa</span></a>

                            </li>
                            <li class="">
                                <a href="#maliyetler" class="has-arrow" aria-expanded="false"><i class="icon-users"></i><span> Kullanıcı İşlemleri</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li>
                                        <a href="<?=base_url()?>admin/home/profilim"><i class="icon-user"></i><span> Profilim</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>admin/departmanlar/departmanlar"><i class="icon-users"></i><span> Departmanlar</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>admin/kullanicilar/kullanicilar"><i class="icon-users"></i><span> Kullanıcılar</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#maliyetler" class="has-arrow" aria-expanded="false"><i class="icon-home"></i><span> Firma İşlemleri</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li>
                                        <a href="<?=base_url()?>admin/firma_turleri/firma_turleri"><i class="icon-list"></i><span> Firma Türleri</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>admin/firmalar/firmalar"><i class="icon-list"></i><span> Firmalar</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>admin/Firma_yetkilileri/Firma_yetkilileri"><i class="icon-users"></i><span> Firma Yetkilileri</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>admin/Firma_temsilci/Firma_temsilci"><i class="icon-users"></i><span> Firma - Temsilci</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>admin/sektorler/sektorler"><i class="icon-size-fullscreen"></i><span> Sektörler</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#maliyetler" class="has-arrow" aria-expanded="false"><i class="icon-energy"></i><span> Etkinlik İşlemleri</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li>
                                        <a href="<?=base_url()?>admin/etkinlik_turleri/etkinlik_turleri"><i class="icon-list"></i><span> Etkinlik Türleri</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>admin/Etkinlikler/Etkinlikler"><i class="icon-list"></i><span> Etkinlikler</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#maliyetler" class="has-arrow" aria-expanded="false"><i class="icon-diamond"></i><span> Ürün İşlemleri</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li>
                                        <a href="<?=base_url()?>admin/Urunler/Urunler"><i class="icon-diamond"></i><span> Ürünler</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>admin/Paketlemeler/Paketlemeler"><i class="icon-bag"></i><span> Paketleme Tipleri</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?=base_url()?>admin/rakip_firmalar/rakip_firmalar"><i class="icon-fire"></i><span> Rakip Firmalar</span></a>
                            </li>
                            <li class="">
                                <a href="#maliyetler" class="has-arrow" aria-expanded="false"><i class="icon-graph"></i><span> Analiz İşlemleri</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li>
                                        <a href="<?=base_url()?>admin/Analiz/Analiz"><i class="icon-plus"></i><span> Analiz Ekle</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>admin/Analiz_incele/Analiz_incele"><i class="icon-graph"></i><span> Analiz İncele</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="right_icon_bar">
        <ul>
            <!--
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Güncel maliyetlerde bütün tabloların excellerini alır."><a href="<?=base_url()?>admin/Butunexceller/Butunexceller"><i class="fa fa-file-excel-o"></i></a></li>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Kırıkkale güncel maliyetlerindeki bütün tabloların excellerini alır."><a href="<?=base_url()?>admin/kirikkale_butunexceller/butunexceller"><i class="fa fa-file-excel-o"></i></a></li>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Gerçekleşen maliyetlerin bütün verilerini yedekler."><a href="<?=base_url()?>admin/Raporlamalar/Raporalgerceklesen"><i class="fa fa-file"></i></a></li>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Gerçekleşen nakliye maliyetlerinin bütün verilerini yedekler."><a href="<?=base_url()?>admin/Raporlamalar/Raporalgerceklesen_nakliye"><i class="fa fa-truck"></i></a></li>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Güncel maliyetlerin bütün verilerini yedekler."><a href="<?=base_url()?>admin/Raporlamalar/Raporal"><i class="fa fa-file"></i></a></li>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Tablolardaki bütün verileri günceller."><a href="<?=base_url()?>admin/Butunguncellemeler/Butunguncellemeler"><i class="icon-reload"></i></a></li>

            <li><a href="javascript:void(0);" class="right_icon_btn"><i class="fa fa-angle-right"></i></a></li>
            -->
        </ul>

    </div>
    <script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
