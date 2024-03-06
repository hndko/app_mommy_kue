<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data <?= $title ?></h6>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="window.location.href='<?= base_url() ?>app/galeri'">Kembali</button>
                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>app/galeri/store" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="galeri">Picture</label>
                            <input type="file" class="form-control" name="galeri" id="galeri" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>