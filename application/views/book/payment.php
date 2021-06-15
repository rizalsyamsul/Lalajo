<?php $i = 1; ?>
<?php foreach ($pay as $data) :  ?>
  <form action="<?= base_url('book/payment'); ?>" method="post">
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
              <p class="card-text"><?= $data['cinema']; ?></p>
              <p class="card-text"><small class="text-muted"><?= $data['date']; ?></small></p>
              <p class="card-text"><small class="text-muted">Time: <?= $data['time']; ?></small></p>
              <p class="card-text"><small class="text-muted">Seat: <?= $data['seats']; ?></small></p>
              <p class="card-text font-weight-bold">Total: Rp 40.000</p>
              <div class="form-group">
                <label>Payment Code:</label>
                <input class="form-control col-md-7" value="PY<?= $data['bcode']; ?>" disabled>
                <a href="<?= base_url('Book/deletePayment/') . $data['id']; ?>" class="btn btn-outline-warning mt-2" onclick="return confirm('Apakah anda yakin membatalkan pesanan ini?');">Cancel</a>
                <a href="<?= base_url('Book/deletePayment/') . $data['id']; ?>" class="btn btn-primary mt-2">Confirm Payment</a>
                <!-- <button type="submit" class="btn btn-primary mt-2">Confirm Payment</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- /.container-fluid -->
  <?php $i++; ?>
<?php endforeach; ?>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Select Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 ml-auto">Link Aja</div>
            <div class="col-md-3 ml-auto">BCA</div>
            <div class="col-md-3 ml-auto">OVO</div>
          </div>
          <div class="row">
            <div class="col-md-3 ml-auto">Gopay</div>
            <div class="col-md-3 ml-auto">BNI</div>
            <div class="col-md-3 ml-auto">DANA</div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="<?= base_url('book/invoice'); ?>">Pay</a>
      </div>
    </div>
  </div>
</div>