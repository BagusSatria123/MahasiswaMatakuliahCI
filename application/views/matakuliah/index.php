<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Matakuliah <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hid_matkulden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>matakuliah/tambah" class="btn btn-primary"> Tambah Data</a>
        </div>
    </div>
    <!-- mt-3 artinya margin top 3 -->
    <div class="row mt-3">
        <div class="col-md-6">
            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
            </form>
        </div>

            <h2>Daftar Matakuliah</h2>
            <table class="table table-hover">
                <tr>
                    <td>Kode</td>
                    <td>Mata Kuliah</td>
                    <td>Jam</td>
                    <td>Semester</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- alert -->
                <?php if (empty($matakuliah)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data Matakuliah Tidak ditemukan!
                    </div>
                <?php endif; ?>
                <?php foreach ($matakuliah as $matkul) : ?>
                    <tr>
                        <td><?= $matkul['kode']; ?></td>
                        <td><?= $matkul['matakuliah']; ?></td>
                        <td><?= $matkul['jam']; ?></td>
                        <td><?= $matkul['semester']; ?></td>
                        <td><a href="<?= base_url(); ?>matakuliah/hapus/<?= $matkul['id_matkul']; ?>" 
                        class="badge badge-danger float-right" 
                        onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a></td>
                        <td><a href="<?= base_url();?>matakuliah/edit/<?= $matkul['id_matkul'];?>"
                         class="badge badge-success float-right">Edit</a></td>    
                        <td><a href="<?= base_url();?>matakuliah/detail/<?= $matkul['id_matkul'];?>"
                        class="badge badge-primary float-right">Detail</a></td>           
                    </tr>
                    </li>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>