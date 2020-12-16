<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <h1 style="font-family:Georgia, 'Times New Roman', Times, serif">Hello I'am Devon</h1>
            <p> The first i was born on the my family, it is time to find on the future to this word, but this time really don't every time to like this, perhaps well meet again at tonight.</p>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/Ran Shibuki.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="color:black;">None with the Future</h5>
                            <p style="color:black ; font-family:Georgia, 'Times New Roman', Times, serif"><strong>Change To Survive On The Future</strong> </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/Minato Mio 3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/Aine Yuki.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
    </div>
</div>

<?= $this->endSection(); ?>