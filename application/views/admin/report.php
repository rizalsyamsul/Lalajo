<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Recent Transaction</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Film</th>
                            <th>Cinema</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Price</th>
                            <th>Seats</th>
                            <th>Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($report as $r) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $r['name'] ?></td>
                                <td><?= $r['film'] ?></td>
                                <td><?= $r['cinema'] ?></td>
                                <td><?= $r['date'] ?></td>
                                <td><?= $r['time'] ?></td>
                                <td><?= $r['harga'] ?></td>
                                <td><?= $r['seats'] ?></td>
                                <td><?= $r['code'] ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Unpaid Booking</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Film</th>
                            <th>Cinema</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Price</th>
                            <th>Seats</th>
                            <th>Booking Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($unpaid as $u) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $u['name'] ?></td>
                                <td><?= $u['film'] ?></td>
                                <td><?= $u['cinema'] ?></td>
                                <td><?= $u['date'] ?></td>
                                <td><?= $u['time'] ?></td>
                                <td>40000</td>
                                <td><?= $u['seats'] ?></td>
                                <td><?= $u['bcode'] ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->