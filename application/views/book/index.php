<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('book/index'); ?>" method="post">
        <div class="form-group col-md-8">
            <label>Film</label>
            <select class="form-control" id="film" name="film">
                <option>The Mentalist</option>
                <option>Mortal Kombat</option>
                <option>The Avenger</option>
                <option>Joker</option>
                <option>Kingsman</option>
                <option>Keluarga Cemara</option>
                <option>Suicide Squad</option>
                <option>The Raid</option>
                <option>Sausage Party</option>
            </select>
        </div>

        <div class="form-group col-md-8">
            <label>Cinema</label>
            <select class="form-control" id="cinema" name="cinema">
                <option>Trans Studio Mall XXI </option>
                <option>Braga XXI</option>
                <option>BTC XXI</option>
                <option>Ciwalk XXI</option>
                <option>Empire XXI</option>
                <option>Festival Citylink XXI</option>
                <option>Transmart Buah Batu XXI</option>
            </select>
        </div>

        <div class="form-group col-md-8">
            <label>Date</label>
            <input class="form-control" type="date" value="2021-06-01" id="date" name="date">
        </div>

        <div class="form-group col-md-8">
            <label>Time</label>
            <select class="form-control" id="time" name="time">
                <option>12:15</option>
                <option>12:45</option>
                <option>15:05</option>
                <option>15:35</option>
                <option>17:55</option>
                <option>18:25</option>
            </select>
        </div>

        <div class="form-group col-md-8">
            <label>No of Tickets</label>
            <input class="form-control col-md-2" type="number" value="0" min="0" max="10" id="tickets_amount" name="tickets_amount">
        </div>

        <div class="form-group col-md-8">
            <button type="submit" class="btn btn-success">Buy</button>
            <!-- <a type="button" class="btn btn-success" href="http://tix.id/">Buy</a> -->
        </div>

    </form>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->