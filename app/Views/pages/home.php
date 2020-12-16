<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 style="font-family: Georgia, 'Times New Roman', Times, serif;">Selamat Datang ke MyAppDev</h1>
            <div>Please Attention to choose the navbar menu category on the top</div>
            <div class="card-deck">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center bg-transparent border-primary" style="font-size:larger; font-family:Georgia, 'Times New Roman', Times, serif">My Profile</div>
                    <div class="card-body text-primary text-center">
                        <img src="https://vignette.wikia.nocookie.net/all-aikatsu/images/8/88/Tvtokyo_chara_list_mio.png/revision/latest?cb=20190928100053" class="card-img-top" alt="...">
                        <br>
                        <br>
                        <h5 class="card-title">Eurico Devon Bura Pakilaran</h5>
                        <div class="card-text"><small><strong>H071191048</strong></small></div>
                        <div class="card-text">Find On the future another world</div>
                        <br>
                        <a href="" class="btn btn-primary">Go Away</a>
                    </div>
                </div>
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center bg-transparent border-primary" style="font-size:larger; font-family:Georgia, 'Times New Roman', Times, serif">About</div>
                    <div class="card-body text-primary text-center">
                        <img src="/img/Character_Zhongli_Card.webp" class="card-img-top" alt="...">
                        <br>
                        <br>
                        <h5 class="card-title">Eurico Devon Bura Pakilaran</h5>
                        <div class="card-text"><small><strong>H071191048</strong></small></div>
                        <div class="card-text">Find On the future another world</div>
                        <br>
                        <a href="/pages/about" class="btn btn-primary">Go Away</a>
                    </div>
                </div>
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center bg-transparent border-primary" style="font-size:larger; font-family:Georgia, 'Times New Roman', Times, serif">People</div>
                    <div class="card-body text-primary text-center">
                        <img src="https://vignette.wikia.nocookie.net/all-aikatsu/images/b/bf/Tvtokyo_chara_list_raki.png/revision/latest?cb=20190928100109" class="card-img-top" alt="...">
                        <br>
                        <br>
                        <h5 class="card-title">Eurico Devon Bura Pakilaran</h5>
                        <div class="card-text"><small><strong>H071191048</strong></small></div>
                        <div class="card-text">Find On the future another world</div>
                        <div class="card-text">You must be loggin before see all menu</div>
                        <br>
                        <a href="/orang" class="btn btn-primary">Go Away</a>
                    </div>
                </div>
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center bg-transparent border-primary" style="font-size:larger; font-family:Georgia, 'Times New Roman', Times, serif">Komik</div>
                    <div class="card-body text-primary text-center">
                        <img src="https://static.wikia.nocookie.net/all-aikatsu/images/7/73/Tvtokyo_chara_list_maika.png/revision/latest?cb=20190928100126" class="card-img-top" alt="...">
                        <br>
                        <br>
                        <h5 class="card-title">Eurico Devon Bura Pakilaran</h5>
                        <div class="card-text"><small><strong>H071191048</strong></small></div>
                        <div class="card-text">Find On the future another world</div>
                        <div class="card-text">You must be loggin before see all menu</div>
                        <br>
                        <a href="/komik" class="btn btn-primary">Go Away</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>