<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
            <div class="card border-primary mb-3" style="max-width: 740px; ">
                <div class="card-header bg-transparent border-primary" style="text-align:center"><b style="font-family:Franklin Gothic Medium, Arial Narrow, Arial, sans-serif"><?= $komik['judul']; ?></b></div>
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" alt="..." class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:Georgia, 'Times New Roman', Times, serif"><strong>
                                    <?= $komik['judul']; ?></strong>
                            </h5>
                            <p class="card-text"><b> Penulis : </b> <?= $komik['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted"><strong>Penerbit : </strong><?= $komik['penerbit']; ?></small></p>
                            <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
                            <form action="/komik/<?= $komik['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete this?');">Delete</button>
                            </form>
                            <a href="/komik" class="btn btn-primary">Back</a>
                            <br>
                            <br>
                            <p class="card-text"><b> sinopsis : </b> <?= $komik['sinopsis']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>