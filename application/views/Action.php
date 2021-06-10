<!DOCTYPE html>
<style>
* {box-sizing: border-box}

/* Container needed to position the overlay. Adjust the width as needed */
.container {
  position: relative;
  width: 400%;
  max-width: 300px;
}

.container img {
    width: 200%;
    height: 100%;
}

/* Make the image to responsive */
.image {
  display: block;
  max-width: 100%;
  height: auto;
}

/* The overlay effect - lays on top of the container and over the image */
.overlay {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1;
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

/* When you mouse over the container, fade in the overlay title */
.container:hover .overlay {
  opacity: 1;
}

</style>
<html>

<div class="row">
  <div class="HeaderLL">
    <div class="row justify-content-center">
    </div>
  </div>
  <div class="DaftarLL">

    <div class="container">
      <div class="row align-items-start">
      <div class="col">
        <div class="container">
          <img src=<?= base_url('/assets/img/movies/Kingsman.jpg') ?>>
          <div class="overlay">Kingsman</div>
        </div></div>
      <div class="col">
        <div class="container">
            <img src=<?= base_url('/assets/img/movies/MortalKombat.jpg') ?>>
            <div class="overlay">MortalKombat</div>
          </div></div>
      </div>

      <div class="row align-items-center">
      <div class="col">
        <div class="container">
          <img src=<?= base_url('/assets/img/movies/SuicideSquad.jpg') ?> >
          <div class="overlay">SuicideSquad</div>
          </div></div>
      <div class="col">
        <div class="container">
          <img src=<?= base_url('/assets/img/theater/TheRaid.jpg') ?> >
          <div class="overlay">TheRaid</div>
          </div></div>
      </div>
      
    </div>





  </div>
</div>
