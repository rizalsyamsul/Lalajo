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
<h2>Romance Film</h2>
<div class="container">
  <div class="card-deck mt-3">
    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/CrazyRichAsians.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Crazy Rich Asians</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Friendzone.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Friendzone</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Holidate.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Holidate</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="card-deck mt-3">
    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Lalaland.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">La la land</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/RomanceDoll.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Romance Doll</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/LoveRosie.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Love Rosie</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

  </div>
</div>
