<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary"> Tambah Data</a>
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
        <h2>Daftar Mahasiswa</h2>
        <table class="table table-hover">
            <tr>
                <td>Nama</td>
                <td>NIM</td>
                <td>Email</td>
                <td>Jurusan</td>
                <td>Jenis Kelamin</td>
                <td>Foto</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <!-- alert -->
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Mahasiswa Tidak ditemukan!
                </div>
            <?php endif; ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['email']; ?></td>
                    <td><?= $mhs['jurusan']; ?></td>
                    <td><?= $mhs['jeniskelamin']; ?></td>
                    <td><?= $mhs['foto']; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" 
                    class="badge badge-danger float-right" 
                    onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a></td>
                    <td><a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id']; ?>" 
                    class="badge badge-success float-right">Edit</a></td>
                    <td><a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" 
                    class="badge badge-primary float-right">Detail</a></td>
                </tr>
                </li>
            <?php endforeach; ?>
            </ul>
        </table>
        <!-- <table class="table table-striped info">
                <tr>
                    <td>NAMA</td>
                    <td>NIM</td>
                    <td>EMAIL</td>
                    <td>JURUSAN</td>
                </tr>
            </table> -->
    </div>
</div>
</div>