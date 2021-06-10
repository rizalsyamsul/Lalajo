<style>
  * {
    box-sizing: border-box;
  }


  .DaftarLL {
    position: relative;
    text-align: center;
    top: 0;
    left: 5%;
    height: 100px;
    width: 90%;
    margin-bottom: 450px;
  }

  .HeaderLL {
    position: center;
    top: 0;
    right: 0;
    left: 0;
    height: 300px;
    width: 100%;
    background-image: url('<?= base_url('/assets/img/header.png'); ?>');
    background-size: 70%;
    background-repeat: no-repeat;
    background-position: center;
  }

  h1 {
    font-family: Open Sans;
    font-style: normal;
    font-weight: bold;
    font-size: 54px;
    color: white;
    text-align: center;

  }

  .card-img-top {
    width: 100%;
    height: 570px;
  }
</style>>

<div class="row">
  <div class="HeaderLL">
    <div class="row justify-content-center">
    </div>
  </div>
  <div class="DaftarLL">

    <hr class="my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('/assets/img/movies/Avenger.jpg') ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">The Avengers</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('/assets/img/movies/Joker.png') ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Joker</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('/assets/img/movies/Kingsman.jpg') ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Kingsman</h4>

                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('/assets/img/movies/MortalKombat.jpg') ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Mortal Kombat</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('/assets/img/movies/SuicideSquad.jpg') ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Suicide Squad</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('/assets/img/movies/TheRaid.jpg') ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">The Raid</h4>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.Second slide-->
        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('/assets/img/movies/Cemara.jpg') ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Keluarga Cemara</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('/assets/img/movies/sosis.jpg') ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Sausage Party</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('/assets/img/movies/mentalist.jpg') ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">The Mentalist</h4>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.Third slide-->
      </div>
      <!--/.Slides-->
    </div>
    <!--/.Carousel Wrapper-->
  </div>
</div>
