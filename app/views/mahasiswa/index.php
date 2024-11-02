<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah data mahasiswa
            </button>
            <br><br>
            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach( $data['mhs'] as $mhs): ?>
                        <li class="list-group-item d-flex justify-content-between align-itms-center">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tamah data mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nrp">Nrp</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select multiple class="form-control" id="jurusan" name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Pangan">Teknik Pangan</option>
                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                    <option value="Teknik Perancangan Wilayah dan Kota">Teknik Perancangan Wilayah dan Kota
                    </option>
                </select>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>