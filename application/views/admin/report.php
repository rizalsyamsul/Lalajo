<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Report</h6>
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
                            <th>Theater</th>
                            <th>Seats</th>
                            <th>Price</th>
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
                                <td><?= $r['bioskop'] ?></td>
                                <td><?= $r['date'] ?></td>
                                <td><?= $r['theater'] ?></td>
                                <td><?= $r['kursi'] ?></td>
                                <td><?= $r['harga'] ?></td>
                                <td><?= $r['code'] ?></td>
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