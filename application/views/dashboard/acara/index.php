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
                    <form action="<?= base_url('app/acara/update') ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="text_start">Text Awal</label>
                                <textarea name="text_start" id="text_start" cols="30" rows="4" required><?= $res->text_start ?></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="text_end">Text Akhir</label>
                                <textarea name="text_end" id="text_end" cols="30" rows="4" required><?= $res->text_end ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datetime">Tanggal & Waktu</label>
                            <input type="datetime-local" class="form-control" name="datetime" id="datetime" value="<?= $res->datetime ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>