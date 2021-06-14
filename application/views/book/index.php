<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form>
      <div class="form-group col-md-8">
          <label>Film</label>
          <select class="form-control" id="exampleFormControlSelect1">
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
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Trans Studio Mall XXI</option>
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
            <input class="form-control" type="date" value="2021-06-01" id="example-datetime-local-input">
        </div>

        <div class="form-group col-md-8">
            <label>Time</label>
            <select class="form-control" id="exampleFormControlSelect1">
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
                        <option>13</option>
                        <option>15</option>
                        <option>17</option>
                        <option>19</option>
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
