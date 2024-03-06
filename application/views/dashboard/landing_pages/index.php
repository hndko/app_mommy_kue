<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail <?= $title ?></h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('app/landing_pages/update') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?= $res->title ?>" autocomplete="off" maxlength="30" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" value="<?= $res->judul ?>" autocomplete="off" maxlength="10" required>
                        </div>
                        <div class="form-group">
                            <label for="no_telpon">No Telpon</label>
                            <input type="text" class="form-control" name="no_telpon" id="no_telpon" value="<?= $res->no_telpon ?>" autocomplete="off" maxlength="20" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?= $res->email ?>" autocomplete="off" maxlength="155" required>
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" class="form-control" name="logo" id="logo">
                            <input type="hidden" name="logo_old" id="logo_old" value="<?= $res->logo ?>">
                            <img src="<?= base_url() ?>assets/img/<?= $res->logo ?>" alt="" class="img-fluid" style="max-width: 100px;">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>