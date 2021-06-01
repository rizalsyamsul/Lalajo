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
        <div class="form-group col-md-8">
            <button type="submit" class="btn btn-success">Buy</button>
        </div>
    </form>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->