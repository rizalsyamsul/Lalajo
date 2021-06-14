<!DOCTYPE html>
<style>

  .card-img-top {
    width: 100%;
    height: 30vw;
    object-fit: cover;
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
h2 {
  font-family: Open Sans;
  font-style: normal;
  font-weight: bold;
  font-size: 54px;
  color: white;
  text-align: center;

}
</style>
<div class="HeaderLL">
  <div class="row justify-content-center">
  </div>
</div>
<h2>Comedy Film</h2>
<div class="container">
  <div class="card-deck mt-3">
    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/sosis.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sausage Party</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Dolittle.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dolittle</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Spongebob.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">The Spongebob Movie/h5>
          <a href="#"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="card-deck mt-3">
    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Soul.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Soul</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/spies.jfif') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Spies in Disguise</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Deadpool2.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Deadpool 2</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

  </div>
</div>
