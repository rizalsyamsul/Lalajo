<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form>
        <div class="form-group col-md-8">
            <label>City</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Bekasi</option>
                <option>Bandung</option>
                <option>Cirebon</option>
                <option>Jakarta</option>
                <option>Bogor</option>
            </select>
        </div>
        <div class="form-group col-md-8">
            <label>Cinema</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>XXI Trans Studio Mall</option>
                <option>CGV Metro Indah Mall</option>
                <option>XII Paris Van Java</option>
            </select>
        </div>
        <div class="form-group col-md-8">
            <label>Movie</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>The Unholy</option>
                <option>Ragnarok</option>
                <option>Lucifer</option>
            </select>
        </div>
        <div class="form-group col-md-8">
            <label>Date</label>
            <input class="form-control" type="date" value="2021-06-01" id="example-datetime-local-input">
        </div>

        <div class="form-group col-md-8">
            <label>Time</label>
            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
        </div>

        <div class="form-group col-md-8">
            <label>No of Tickets</label>
            <input class="form-control col-md-2" type="number" value="0" min="0" max="10">
        </div>
        <div class="card shadow col-md-4">

        </div>
        <div class="form-group col-md-8 shadow">

            <div class="form-row">
                <img src="<?= base_url('assets/img/screen.jpg'); ?>" alt="">
                <div class="col-md-2 m-1">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                        <option>E</option>
                        <option>F</option>
                        <option>G</option>
                        <option>H</option>
                        <option>I</option>
                        <option>J</option>
                        <option>K</option>
                        <option>L</option>
                    </select>
                </div>
                <div class="col-md-2 m-1">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>3</option>
                        <option>5</option>
                        <option>7</option>
                        <option>9</option>
                        <option>11</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group col-md-8">
            <!-- <button type="submit" class="btn btn-success">Buy</button> -->
            <a type="button" class="btn btn-success" href="http://tix.id/">Buy</a>
        </div>

    </form>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->