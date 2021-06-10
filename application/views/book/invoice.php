
<?php $i = 1; ?>
<?php foreach ($inv as $data) :  ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/movies/') . $data['image']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['film']; ?></h5>
                    <p class="card-text"><?= $data['theater']; ?></p>
                    <p class="card-text"><small class="text-muted"><?= $data['date']; ?></small></p>
                    <p class="card-text"><small class="text-muted"><?= $data['kursi']; ?></small></p>
                    <p class="card-text font-weight-bold">Total: Rp <?= $data['harga']; ?></p>
                    <div class="form-group">
                        <label>Booking Code:</label>
                        <input class="form-control col-md-7" value="<?= $data['code']; ?>" disabled>
                        <button type="submit" class="btn btn-danger mt-2" disabled>Paid</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php $i++; ?>
<?php endforeach; ?>
