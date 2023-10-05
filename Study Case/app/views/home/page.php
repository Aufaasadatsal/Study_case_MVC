<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
        <div class=" card-body">
            <img src="<?= BASE_URL ?>/img/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
            <h5 class="card-title">Profile Anda</h5>
            <p class="card-text">
                Nama : <?= $data['nama'] ?>
                <br>
                Pekerjaan : <?= $data['pekerjaan']?>
            </p>
            <a href="<?= BASE_URL ?>/home/index" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
</div>