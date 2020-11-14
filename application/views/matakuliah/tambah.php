<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Tambah Data Matakuliah</div>
                <div class="card-body">
                <?php if (validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control" id="kode" name="kode">
                        </div>
                        <div class="form-group">
                            <label for="matakuliah">Matakuliah</label>
                            <input type="text" class="form-control" id="matakuliah" name="matakuliah">
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="number" class="form-control" id="jam" name="jam">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control" id="semester" name="semester">
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
        </div>
    </div>
</div>
</div>