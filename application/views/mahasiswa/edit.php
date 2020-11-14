<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Tambah Data Mahasiswa</div>
                <div class="card-body">
                <?php if (validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                            value="<?= $mahasiswa['nama'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" id="nim" name="nim"
                            value="<?= $mahasiswa['nim'];?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                            value="<?= $mahasiswa['email'];?>">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan" class="form-group">
                                <?php foreach($jurusan as $key): ?>
                                    <?php if($key == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $key ?>"selected><?= $key ?></option>
                                    <?php else :?>
                                        <option value="<?= $key ?>"><?= $key ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                            <div class="input-group">
                                <?php foreach ($jeniskelamin as $key) : ?>
                                    <?php if ($key == $mahasiswa['jeniskelamin']) : ?>
                                       <input type="radio" id="jeniskelamin" 
                                        name="jeniskelamin" value="<?= $key ?>" checked><?= $key ?>
                                    <?php else : ?>
                                        <input type="radio" id="jeniskelamin" 
                                        name="jeniskelamin" value="<?= $key ?>"><?= $key ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <img src="<?= base_url('foto/') . $mahasiswa['foto']; ?>" alt="" width="75px">                 
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-item" id="foto" name="foto">
                            <input type="hidden" class="form-control" id="foto" name="fotoLama">
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
        </div>
    </div>
</div>
</div>