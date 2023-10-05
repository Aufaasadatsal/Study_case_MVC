<div class="container">
    <h3 class="mb-3">Tambah Peminjaman</h3>
    <form action="<?= BASE_URL; ?>/buku/simpanMinjam/" method="post">
    <div class="class-body">
        <div class="form-group mb-3">
            <label for="judul">Nama Peminjam</label>
            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
        </div>
        <div class="form-group mb-3">
            <label for="jenis_barang">Jenis barang</label>
            <select class="form-select" aria-label="Default select example" name="jenis_barang">
            <option selected>Pilih</option>
            <option value="laptop">Laptop</option>
            <option value="hp">HP</option>
            <option value="adaptor">Adaptor LAN</option>
    </select>
        </div>
        <div class="form-group mb-3">
            <label for="no_barang">No Barang</label>
            <input type="number" class="form-control" id="no_barang" name="no_barang">
        </div>
        <div class="form-group mb-3">
            <label for="tgl_pinjam">Tanggal Pinjam</label>
            <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>