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
                            <?php $no = 1; ?>
                            <?php foreach ($result as $res) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><img src="<?= base_url() ?>assets/img/gallery/<?= $res->galeri ?>" class="img-fluid" style="max-width: 100px;"></td>
                                    <td>
                                        <a href="<?= base_url('app/galeri/edit/' . $res->galeri_id) ?>">Edit</a> |
                                        <a href="<?= base_url('app/galeri/delete/' . $res->galeri_id) ?>" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>