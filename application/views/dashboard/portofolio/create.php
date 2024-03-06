<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data <?= $title ?></h6>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="window.location.href='<?= base_url() ?>app/portofolio'">Kembali</button>
                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>app/portofolio/store" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" autocomplete="off" maxlength="155" required>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" id="jabatan" autocomplete="off" maxlength="30" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi" required>
                        </div>
                        <div class="form-group">
                            <label for="sampul">Picture</label>
                            <input type="file" class="form-control" name="sampul" id="sampul" required>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="number" class="form-control" name="rating" id="rating" min="1" max="5" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>