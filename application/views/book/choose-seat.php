<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->s