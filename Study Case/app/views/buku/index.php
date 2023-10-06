<div class="container">
    <h3 class="mb-3">Daftar Peminjaman</h3>
    <br>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a href="<?= BASE_URL; ?>/buku/tambahMinjam/" class="btn btn-primary">Tambah Pinjaman</a>
            <form class="d-flex" role="search" action="<?= BASE_URL; ?>/buku/cari" method="post" required>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
                
                <button class="btn btn-outline-danger" type="submit">Reset</button>
            </form>
        </div>
    </nav>
    <table class="table table-light table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama peminjam</th>
                <th scope="col">Jenis barang</th>
                <th scope="col">Nomor Barang</th>
                <th scope="col">Tanggal Peminjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php date_default_timezone_set("asia/jakarta"); ?>
            <?php foreach ($data['buku'] as $row) :?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row ['nama_peminjam']; ?></td>
                <td><?= $row ['jenis_barang']; ?> </td>
                <td><?= $row ['no_barang']; ?></td>
                <td><?= $row ['tgl_pinjam']; ?></td>
                <td><?= $row ['tgl_kembali']; ?></td>
                <td>
                <?php
                $tglPinjam = $row['tgl_pinjam'];
                $tglKembali = $row['tgl_kembali'];
                $today = date('Y-m-d H:i:s');

                if ($tglPinjam >= $tglKembali || $today >= $tglKembali) {
                    echo '<span class="badge bg-success">Sudah Kembali</span>';
                    $showEditButton = false; 
                    } else{
                    echo '<span class="badge bg-danger">Belum Kembali</span>';
                    $showEditButton = true; 
                }
                ?>
                </td>
                <td>
                    <?php if ($showEditButton) : ?>
                    <a href="<?= BASE_URL ?>/Buku/edit/<?=$row['id'] ?>" class="btn btn-primary">Edit</a>
                    <?php endif; ?>
                    <a href="<?= BASE_URL ?>/Buku/hapus/<?=$row['id'] ?>" class="btn btn-danger"
                        onclick="return confirm('Hapus Data?');">Hapus</a>
                </td>
            </tr>
            <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>