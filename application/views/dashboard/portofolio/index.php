<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Detail <?= $title ?></h6>
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='<?= base_url() ?>app/portofolio/create'">Tambah Data</button>
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

                    <table class="table table-hover" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jabatan</th>
                                <th>Deskripsi</th>
                                <th>Picture</th>
                                <th>Rating</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($result as $res) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $res->nama_lengkap ?></td>
                                    <td><?= $res->jabatan ?></td>
                                    <td><?= $res->deskripsi ?></td>
                                    <td><img src="<?= base_url() ?>assets/img/testimonials  /<?= $res->sampul ?>" class="img-fluid" style="max-width: 100px;"></td>
                                    <td><?= $res->rating ?></td>
                                    <td>
                                        <a href="<?= base_url('app/portofolio/edit/' . $res->portofolio_id) ?>">Edit</a> |
                                        <a href="<?= base_url('app/portofolio/delete/' . $res->portofolio_id) ?>" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
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