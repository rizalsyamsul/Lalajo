<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('/assets/img/movies/MortalKombat.jpg') ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Mortal Kombat</h5>
                    <p class="card-text">XXI Transmart Buah Batu</p>
                    <p class="card-text"><small class="text-muted">Senin, 31 May 2021</small></p>
                    <p class="card-text"><small class="text-muted">D1, D2</small></p>
                    <p class="card-text font-weight-bold">Total: Rp 80,000</p>
                    <div class="form-group">
                        <label>Booking Code:</label>
                        <input class="form-control col-md-7" value="#1ORK1P2" disabled>
                        <button type="submit" class="btn btn-success mt-2" disabled>Paid</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('/assets/img/movies/MortalKombat.jpg') ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Mortal Kombat</h5>
                    <p class="card-text">XXI Transmart Buah Batu</p>
                    <p class="card-text"><small class="text-muted">Senin, 31 May 2021</small></p>
                    <p class="card-text"><small class="text-muted">D1, D2</small></p>
                    <p class="card-text font-weight-bold">Total: Rp 80,000</p>
                    <div class="form-group">
                        <label>Booking Code:</label>
                        <input class="form-control col-md-7" value="-" disabled>
                        <button type="submit" class="btn btn-danger mt-2" disabled>Unpaid</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->