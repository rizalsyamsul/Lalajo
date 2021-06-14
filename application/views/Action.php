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
<h2>Action Film</h2>
<div class="container">
  <div class="card-deck mt-3">
    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Kingsman.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kingsman</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/MortalKombat.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mortal Kombat</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/SuicideSquad.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Suicide Squad</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="card-deck mt-3">
    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/Avenger.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Avenger</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/TheRaid.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">The Raid</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <div class="card text-center">
      <div class="card-block">
        <img src="<?= base_url('/assets/img/movies/AliensVsPredator.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Aliens Vs Predator</h5>
          <a href="#"></a>
        </div>
      </div>
    </div>

  </div>
</div>
