<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Detail <?= $title ?></h6>
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='<?= base_url() ?>app/galeri/create'">Tambah Data</button>
                </div>
                <div class="card-body table-responsive">
                    <?php if ($this->session->flashdata('success') !== null) : ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-<?= $this->session->flashdata('success') ? 'success' : 'danger' ?>" role="alert">
                                    <?= $this->session->flashdata('message') ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Picture</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>