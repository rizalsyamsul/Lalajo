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
<h2>Thriller Film</h2>
<div class="container">
  <div class="card-deck mt-3">
    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/mentalist.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mentalist</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/GirlFromNowhere.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Girl From Nowhere</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Joker.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Joker</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="card-deck mt-3">
    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Searching.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Searching</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/6Underground.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">6 Underground</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Forgotten.jfif') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Forgotten</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

  </div>
</div>
